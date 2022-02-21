<?php

use App\Models\Serverside_model;

namespace App\Controllers;

class Data extends BaseController
{
    public function __construct()
    {
        $this->month = date('m');
        $this->year = date('Y');
        $this->day = date('d');
        $this->tgl = '2022-02-01'; //date('Y-m-d');
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
        $where = "DAY(tanggal)='01' AND MONTH(tanggal)='02' AND YEAR(tanggal)='2022'";
        //Column Order Harus Sesuai Urutan Kolom Pada Header Tabel di bagian View
        //Awali nama kolom tabel dengan nama tabel->tanda titik->nama kolom seperti pengguna.nama
        $column_order = array(NULL, 'tanggal', 'id_mt_unit', 'unit', 'bpjs_1', 'swasta_1', 'asuransi_1', 'bpjs_2', 'swasta_2', 'asuransi_2');
        $column_search = array('tanggal', 'id_mt_unit', 'unit', 'bpjs_1', 'swasta_1', 'asuransi_1', 'bpjs_2', 'swasta_2', 'asuransi_2');
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
            $row[] = number_format($lists->swasta_1);
            $row[] = number_format($lists->asuransi_1);
            $row[] = number_format($lists->bpjs_1);
            $row[] = number_format($tot1);
            $row[] = number_format($lists->swasta_2, 0);
            $row[] = number_format($lists->asuransi_2, 0);
            $row[] = number_format($lists->bpjs_2, 0);
            $row[] = number_format($tot2, 0);
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


    public function getKunj()
    {
        $data['kunjungan'] = $this->db1->query("SELECT * FROM v_console_all WHERE id_type=1 AND DAY(tanggal)='01' AND MONTH(tanggal)='02' AND YEAR(tanggal)='2022'")->getRowArray();
        echo view('pages/app/home_kunj', $data);
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
    }


    public function getPend()
    {
        $data['pendapatan'] = $this->db1->query("SELECT * FROM v_console_all WHERE id_type=2 AND DAY(tanggal)='01' AND MONTH(tanggal)='02' AND YEAR(tanggal)='2022'")->getRowArray();
        echo view('pages/app/home_pend', $data);
    }
}
