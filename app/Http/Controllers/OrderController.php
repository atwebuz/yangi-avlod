<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function create(Request $request)
     {
         // Begin transaction
         DB::beginTransaction();
     
         try {
             // Validate the incoming request
             $validated = $request->validate([
                 'fio' => 'required|string|max:255',
                 'company_name' => 'required|string|max:255',
                 'email' => 'required|email|max:255',
                 'phone' => 'required|string',
                 'stir' => 'required|string',
             ]);
     
             // Create the order
             $order = Order::create([
                 'fio' => $validated['fio'],
                 'company_name' => $validated['company_name'],
                 'email' => $validated['email'],
                 'phone' => $validated['phone'],
                 'stir' => $validated['stir'],
                 'status' => $request->get('status', 0),
             ]);
     
             // Function to handle file upload and save
             function handleFileUploadProduct($files, $order, $folder)
             {
                 $fileDetails = [];
                 foreach ($files as $file) {
                     $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                     $extension = $file->getClientOriginalExtension();
                     $date = now()->format('Ymd_His');
                     $fileName = $originalName . '_' . $date . '.' . $extension;
                     $filePath = public_path('assets/' . $folder . '/' . $fileName);
                     $file->move(public_path('assets/' . $folder), $fileName);
     
                     $fileModel = new File();
                     $fileModel->order_id = $order->id;
                     $fileModel->path = 'assets/' . $folder . '/' . $fileName;
                     $fileModel->save();
     
                     $fileDetails[] = [
                         'name' => $fileName,
                         'path' => $fileModel->path,
                         'sent_date' => now()->format('Y-m-d H:i:s')
                     ];
                 }
                 return $fileDetails;
             }
     
             // Handle file uploads
             $fileDetails = [];
             if ($request->hasFile('bxu_files_teo')) {
                 $fileDetails = array_merge($fileDetails, handleFileUploadProduct($request->file('bxu_files_teo'), $order, 'bxu_files_teo'));
             }
     
             if ($request->hasFile('bxu_files_biznes')) {
                 $fileDetails = array_merge($fileDetails, handleFileUploadProduct($request->file('bxu_files_biznes'), $order, 'bxu_files_biznes'));
             }
     
             // Function to send message to Telegram bot
             function sendMessageToTelegramBot($botToken, $chatId, $message)
             {
                 $url = "https://api.telegram.org/bot$botToken/sendMessage";
                 $postFields = [
                     'chat_id' => $chatId,
                     'text' => $message
                 ];
                 
                 $ch = curl_init();
                 curl_setopt($ch, CURLOPT_URL, $url);
                 curl_setopt($ch, CURLOPT_POST, 1);
                 curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
                 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                 curl_exec($ch);
                 curl_close($ch);
             }
     
             // Function to send file to Telegram bot with caption
             function sendFileToTelegramBot($botToken, $chatId, $filePath, $caption)
             {
                 $url = "https://api.telegram.org/bot$botToken/sendDocument";
                 $postFields = [
                     'chat_id' => $chatId,
                     'document' => new \CURLFile(realpath($filePath)),
                     'caption' => $caption
                 ];
                 
                 $ch = curl_init();
                 curl_setopt($ch, CURLOPT_URL, $url);
                 curl_setopt($ch, CURLOPT_POST, 1);
                 curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
                 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                 curl_exec($ch);
                 curl_close($ch);
             }
     
             // Prepare the message
             $orderDate = now()->format('Y-m-d H:i:s'); // Using current timestamp as order date
             $message = "Buyurtma:\n\n" .
                         "🙎‍♂️: {$validated['fio']}\n" .
                         "🏢: {$validated['company_name']}\n" .
                         "📬: {$validated['email']}\n" .
                         "☎️: {$validated['phone']}\n" .
                         "INN: {$validated['stir']}\n" .
                         "📅 Sanasi: {$orderDate}\n\n";
     
             if (empty($fileDetails)) {
                 $message .= "Fayl yuklanmagan.\n";
             } else {
                 $message .= "Yuklangan Fayllar:\n";
                 foreach ($fileDetails as $file) {
                     $message .= "📄 Nomi: {$file['name']}\n" .
                                 "📅 Sanasi: {$file['sent_date']}\n\n";
                 }
             }
     
             $botToken = '7294267978:AAE_TPf7DEWv-qhYqt8b5BGyQ5nqJbe1PyY';
             $chatId = '5676930441';
     
             sendMessageToTelegramBot($botToken, $chatId, $message);
     
             foreach ($fileDetails as $file) {
                 // Create a caption including file name and sent date
                 $caption = "File: {$file['name']}\nSent Date: {$file['sent_date']}";
                 sendFileToTelegramBot($botToken, $chatId, public_path($file['path']), $caption);
             }
     
             DB::commit();
     
             return redirect()->route('frontend.home')->with('success', 'Order created and files sent successfully.');
         } catch (\Exception $e) {
             // Rollback transaction and log error
             DB::rollback();
             \Log::error('Order creation error: ' . $e->getMessage());
             return redirect()->back()->withErrors('An error occurred while creating the client: ' . $e->getMessage());
         }
     }
     
     
     
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
