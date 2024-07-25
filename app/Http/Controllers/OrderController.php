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
        // dd($request);

        DB::beginTransaction();

        try {
            $order = Order::create([
                'fio' => $request->get('fio'),
                'company_name' => $request->get('company_name'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'contact' => $request->get('contact'),
                'stir' => $request->get('stir'),
                'status' => $request->get('status',0),

            ]);
            function handleFileUploadProduct($files, $order, $folder)
            {
                foreach ($files as $file) {
                    $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                    $extension = $file->getClientOriginalExtension();
                    $date = date('Ymd_His');
                    $fileName = $originalName . '_' . $date . '.' . $extension;
                    $file->move(public_path('assets/' . $folder), $fileName);

                    $fileModel = new File();
                    $fileModel->order_id = $order->id;
                    $fileModel->path = 'assets/' . $folder . '/' . $fileName;
                    $fileModel->save();
                }
            }

            if ($request->hasFile('bxu_files_teo')) {
                handleFileUploadProduct($request->file('bxu_files_teo'), $order, 'bxu_files_teo');
            }

            if ($request->hasFile('bxu_files_biznes')) {
                handleFileUploadProduct($request->file('bxu_files_biznes'), $order, 'bxu_files_biznes');
            }
            DB::commit();

            return redirect()->route('frontend.home')->with('success', 'order created successfully');
        } catch (\Exception $e) {
            DB::rollback();
            \Log::info( $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred while creating the client: ' . $e->getMessage());
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
