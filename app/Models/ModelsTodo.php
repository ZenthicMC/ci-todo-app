<?php
namespace App\Models;
use CodeIgniter\Model;
$db = \Config\Database::connect();

class ModelsTodo extends Model {
   protected $table = 'activities';
   protected $primaryKey = 'id';
   protected $useTimestamps = true;
   protected $allowedFields = ['title', 'desc', 'time'];

   public function getTodo() {
      $query   = $this->db->query("SELECT * FROM activities ORDER BY time ASC LIMIT 6");
      $results = $query->getResultArray();
      return $results;
   }

   public function countTodo() {
      return $this->countAll();
   }

   public function getDate() {
      date_default_timezone_set("Asia/Jakarta");
      $date = date('d-m-Y H:i');
      return $date;
   }

   public function countComplete() {
      date_default_timezone_set("Asia/Jakarta");
      $date = date('d-m-Y H:i');
      $builder = $this->db->table($this->table);

      $builder->where('time <', $date);
      $query = $builder->getWhere();
      

      return count($query->getResult());
   }
}
?>
