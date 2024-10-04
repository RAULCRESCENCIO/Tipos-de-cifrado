<?php 
namespace app\models;
use CodeIgniter\Model;

class ProductoModel extends Model{
    protected $table      = 'tblproductos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre', 'descripcion','precio_venta','precio_compra','existencia','img','id_prov'];

}