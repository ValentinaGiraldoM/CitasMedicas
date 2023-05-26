<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\m_paciente;
class Paciente extends Controller{
    
    public function index()
    {
        $pac = new m_paciente();
        $datos['pacientes']=$pac->findAll();
        return view('welcome_message',$datos);
    }

    public function agregar()
    {
        return view('agregar');
    }

    public function insertar()
    {
        $pac = new m_paciente();

        $data=[
            'NombreP' => $_POST['nombreP'],
            'ApellidoP' => $_POST['apellidoP'],
            'FechaNacimientoP' => $_POST['fechaNaciP'],
            'GeneroP' => $_POST['GeneroP'],
            'DireccionP' => $_POST['DireccionP'],
            'TelefonoP' => $_POST['TelefonoP'],
            'EmailP' => $_POST['EmailP']
        ];

        $pac->insert($data);
        return redirect()->to(base_url());
    }

    public function eliminar($ID=null)
    {
        $pac = new m_paciente();
        $pac->delete($ID);

        return redirect()->to(base_url());
    }

    public function editar($ID = null)
    {
        $pac = new m_paciente();
        $registro['paciente']= $pac->find($ID);

      return view('actualizando',$registro);

       // return redirect()->to(base_url());
    }

    public function factualizar()
    {
        $pac = new m_paciente();
        $ID= $_POST['ID'];

        $data = [
            'NombreP' => $_POST['nombreP'],
            'ApellidoP' => $_POST['apellidoP'],
            'FechaNacimientoP' => $_POST['fechaNaciP'],
            'GeneroP' => $_POST['GeneroP'],
            'DireccionP' => $_POST['DireccionP'],
            'TelefonoP' => $_POST['TelefonoP'],
            'EmailP' => $_POST['EmailP']
        ];
        $pac->update($ID,$data);
       return redirect()->to(base_url());
    }
}