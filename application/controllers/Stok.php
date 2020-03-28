<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Stok extends CI_Controller {
	
	private $tbl = 'dtb_stok';

	public function __construct() {
        parent::__construct();
		$this->load->model('my_query'); 
	}

	public function index(){
		$url = [
			'0'=> base_url(),
			'1'=> "#",
			'2'=> base_url().'Stok/' ,
		];
		$breadcrumb = [
			'0'=>'Dashboard' ,
			'1'=>'Frontend',
			'2'=>'Stok Barang'
		];

		$data = [
			'title' => 'Stok Barang' ,
			'breadcrumb' => $breadcrumb , 'b_url' => $url,
			'content' => $this->load->view('back/stok_barang/index' ,'',true),
		];
		$this->load->view('back/layout/page'  , $data);
	}

	// ///////////////////////// LOAD DATA /////////////////////  //
	function get_detail($id){

		$where = [
			'id' => $id
		];

		$resp = $this->my_query->get_data('*' , $this->tbl , $where )->row();

		echo json_encode($resp);

	}

	function get_data_stok_barang(){
		$select = '*';
		
		//LIMIT
		$limit = array(
			'start'  => $this->input->get('start'),
			'finish' => $this->input->get('length')
		);
		//WHERE LIKE
		$where_like['data'][] = array(
			'column' => 'id,account,nama_barang,sat,saldo_awal,qty_masuk,qty_keluar,saldo_akhir',
			'param'	 => $this->input->get('search[value]')
		);
		
		$index_order = $this->input->get('order[0][column]');
		$order['data'][] = array(
			'column' => $this->input->get('columns['.$index_order.'][name]'),
			'type'	 => $this->input->get('order[0][dir]')
		);

		$query_total  = $this->my_query->get_data_complex($select,$this->tbl,NULL,NULL,NULL,null,null,null);
		$query_filter = $this->my_query->get_data_complex($select,$this->tbl,NULL,$where_like,$order,null,null,null);
		$query        = $this->my_query->get_data_complex($select,$this->tbl,$limit,$where_like,$order,null,null,null);

		$response['data'] = array();
		if ($query<>false) {
			$no = $limit['start']+1;
			foreach ($query->result() as $val) {
				if ($val->id>0) {

					$config = ' <button type="button" onclick="do_edit('.$val->id.')" class="btn-warning btn btn-rounded 				btn-sm btn-circle">
            						<i class="fa fa-pencil"></i>
            					</button>
            					<button type="button" onclick="do_delete('.$val->id.')" class="btn-danger btn btn-rounded btn-sm btn-circle">
            						<i class="fa fa-trash"></i>
            					</button>';

					$response['data'][] = array(
						$val->id,
						$val->account,
						$val->nama_barang,
						$val->sat,
						$val->saldo_awal,
						$val->qty_masuk,
						$val->qty_keluar,
						$val->saldo_akhir,
						$config,
					);
					$no++;	
				}
			}
		}

		$response['recordsTotal'] = 0;
		if ($query_total<>false) {
			$response['recordsTotal'] = $query_total->num_rows();
		}
		$response['recordsFiltered'] = 0;
		if ($query_filter<>false) {
			$response['recordsFiltered'] = $query_filter->num_rows();
		}

		echo json_encode($response);
	}

	// //////////////////////// SAVE DATA ///////////////////////// //


	function save_stok_barang($id=null){
		if (!$this->input->is_ajax_request()) {
			exit('No direct script access allowed');
		}

		$config['upload_path']          = './assets/picture/pic_nilai_kami/';
	    $config['allowed_types']        = 'jpeg|jpg|png';
	    $config['encrypt_name']         = true;
	    $config['overwrite']			= true;
	    $config['max_size']             = 1048 * 3;
	    $this->load->library('upload', $config);

		$data = [
			'account'        => $this->input->post('account'),
			'nama_barang'        => $this->input->post('nama_barang'),
			'sat' => $this->input->post('sat'),
			'saldo_awal' => $this->input->post('saldo_awal'),
			'qty_masuk' => $this->input->post('qty_masuk'),
			'qty_keluar' => $this->input->post('qty_keluar'),
			'saldo_akhir' => $this->input->post('saldo_akhir')
		];

		if ($id != null && $id > 0) {
			$where    = ['id' => $id];
			$old_img  = $this->my_query->get_data('*' , $this->tbl ,$where  )->row()->picture;
			$old_path = 'assets/picture/pic_nilai_kami/'.$old_img;
			if ( file_exists( $old_path) ) {
				unlink($old_path);
			}
			if ( $this->upload->do_upload('files')){					
				$resp_img = ['success' => $this->upload->data() ];

				$data['picture'] = $resp_img['success']['file_name'];

				$msg = ['msg' => 'Berhasil Diupdate '];
				
			} else {
				$data['picture'] = "no-image.png"; 
				$msg = ['msg' => 'Berhasil Diupdate namun gambar gagal di upload'];
			}
			$msg = ['status' => 200];
			$this->my_query->insert_for_id($this->tbl , $where , $data);
		} else {
			if ( $this->upload->do_upload('files')){					
				$resp_img = ['success' => $this->upload->data() ];
				$data['picture'] = $resp_img['success']['file_name'];
				$msg = ['msg' => 'Berhasil disimpan '];
			} else {
				$msg = ['msg' => 'Berhasil disimpan namun gambar gagal di upload'];
			}
			$msg = ['status' => 200];
			$this->my_query->insert_for_id($this->tbl , null , $data);
		}
		echo json_encode($msg);

	}

	function do_delete($id){
		$where    = ['id' => $id];
		$old_img  = $this->my_query->get_data('*' , $this->tbl , $where  )->row()->picture;
		$old_path = 'assets/picture/pic_nilai_kami/'.$old_img;
		if ( file_exists( $old_path) ) {
			unlink($old_path);
		}

		$this->my_query->delete_data($this->tbl, $where);

		echo json_encode(['status'=>200,'msg'=>'Berhasil dihapus']);
	}

}
?>