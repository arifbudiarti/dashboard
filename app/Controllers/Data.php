<?php

use App\Models\Serverside_model;

namespace App\Controllers;

class Data extends BaseController
{
    public function __construct()
    {
        $this->month = date('m');
        $this->year = date('Y');
        $this->db1 = \Config\Database::connect();
    }

    public function index()
    {
        return view('pages/app/home');
    }

    public function console()
    {
        $request = \Config\Services::request();
        $list_data = $this->serversideModel;
        $where = "tanggal='" . date('Y-m-d') . "'";
        //Column Order Harus Sesuai Urutan Kolom Pada Header Tabel di bagian View
        //Awali nama kolom tabel dengan nama tabel->tanda titik->nama kolom seperti pengguna.nama
        $column_order = array(NULL, 'tanggal', 'id_mt_units', 'unit', 'type', 'bpjs_1', 'swasta_1', 'asuransi_1', 'bpjs_2', 'swasta_2', 'asuransi_2');
        $column_search = array('tanggal', 'id_mt_units', 'unit', 'type', 'bpjs_1', 'swasta_1', 'asuransi_1', 'bpjs_2', 'swasta_2', 'asuransi_2');
        $order = array('tanggal' => 'desc');
        $list = $list_data->get_datatables('v_console', $column_order, $column_search, $order, $where);
        $data = array();
        $no = $request->getPost("start");
        foreach ($list as $lists) {
            $no++;
            $tot1 = $lists->swasta_1 + $lists->asuransi_1 + $lists->bpjs_1;
            $tot2 = $lists->swasta_2 + $lists->asuransi_2 + $lists->bpjs_2;
            $row    = array();
            $row[] = $no;
            $row[] = $lists->unit;
            $row[] = $lists->swasta_1;
            $row[] = $lists->asuransi_1;
            $row[] = $lists->bpjs_1;
            $row[] = $lists->tot1;
            $row[] = $lists->swasta_2;
            $row[] = $lists->asuransi_2;
            $row[] = $lists->bpjs_2;
            $row[] = $lists->tot2;
            $data[] = $row;
        }
        $output = array(
            "draw" => $request->getPost("draw"),
            "recordsTotal" => $list_data->count_all('v_console', $where),
            "recordsFiltered" => $list_data->count_filtered('v_console', $column_order, $column_search, $order, $where),
            "data" => $data,
        );

        return json_encode($output);
    }
}
