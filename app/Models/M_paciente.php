<?php 
namespace App\Models;

use CodeIgniter\Model;

class M_paciente extends Model{
    protected $table      = 'pacientes';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'ID';

    protected $allowedFields = ['NombreP','ApellidoP','FechaNacimientoP','GeneroP','DireccionP','TelefonoP','EmailP'];
}