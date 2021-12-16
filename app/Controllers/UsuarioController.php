<?php 
namespace App\Controllers;
use App\Models\UsuarioModel;
use CodeIgniter\HTTP\Files\UploadedFile;

class UsuarioController extends BaseController
{
    public function index(){
        $usuarioModel = new UsuarioModel();
        $data['usuario'] = $usuarioModel->where('id', $id)->first();
        return view('dashboard_comum', $data);
    }

    public function cadastro(){
        return view('cadastro');
    }

    public function editar_dados(){
        $id = $this->request->getVar('id');
        $usuarioModel = new UsuarioModel();
        $data['usuario'] = $usuarioModel->where('id', $id)->first();
        return view('editar_dados', $data);
    }
    public function editar_dados2(){
        $id = $this->request->getVar('id');
        $usuarioModel = new UsuarioModel();
        $data['usuario'] = $usuarioModel->where('id', $id)->first();
        return view('editar_dados2', $data);
    }
 
    public function cadastrar_novo() {
        $usuarioModel = new UsuarioModel();

        
        if ($imagefile = $this->request->getFile('imagem')) {
                if ($imagefile->isValid() && ! $imagefile->hasMoved()) {
                    $newName = $imagefile->getRandomName();
                    $imagefile->move('app\Uploads', $newName);
                    echo "movido";
                }else {
                    
                    echo "não movido";
                }
        }
        $data = [
            'NomeCompleto' => $this->request->getVar('nome_completo'),
            'CPF'  => $this->request->getVar('cpf'),
            'Email'  => $this->request->getVar('email'),
            'Senha'  => password_hash($this->request->getVar('senha'), PASSWORD_BCRYPT),
            'ImagemPerfil'  => $this->request->getVar('imagem'),
            'TipoAcesso'  => $this->request->getVar('tipoUsuario'),
        ];
        $usuarioModel->insert($data);
        return view('home');
    }

    public function atualizar(){
        $usuarioModel = new UsuarioModel();
        $id = $this->request->getVar('id');
        
        if(!empty($this->request->getVar('nome_completo'))) {
            $data['NomeCompleto'] = $this->request->getVar('nome_completo');
        }
        if(!empty($this->request->getVar('cpf'))) {
            $data['CPF'] = $this->request->getVar('cpf');
        }
        if(!empty($this->request->getVar('nome_completo'))) {
            $data['NomeCompleto'] = $this->request->getVar('nome_completo');
        }
        if(!empty($this->request->getVar('email'))) {
            $data['Email'] = $this->request->getVar('email');
        }
        if(!empty($this->request->getVar('senha'))) {
            $data['Senha'] = password_hash($this->request->getVar('senha'), PASSWORD_BCRYPT);
        }
        if(!empty($this->request->getVar('imagem'))) {
            $data['ImagemPerfil'] = $this->request->getVar('imagem');
        }
        if(!empty($this->request->getVar('tipoUsuario'))) {
            $data['TipoAcesso'] = $this->request->getVar('tipoUsuario');
        }
        if(!empty($data) && !empty($id)) {
            $usuarioModel->update($id, $data);
            $session = session();
            $data['usuario'] = $usuarioModel->where('id', $session->get('ID'))->first();
            $session->set($data['usuario']);
        }
        $usuarios['usuarios'] = $usuarioModel->listar_usuarios_cadastrados();
        return view('dashboard_admin', $usuarios);
    }

    public function atualizar_2(){
        $usuarioModel = new UsuarioModel();
        $id = $this->request->getVar('id');
        
        if(!empty($this->request->getVar('nome_completo'))) {
            $data['NomeCompleto'] = $this->request->getVar('nome_completo');
        }
        if(!empty($this->request->getVar('cpf'))) {
            $data['CPF'] = $this->request->getVar('cpf');
        }
        if(!empty($this->request->getVar('nome_completo'))) {
            $data['NomeCompleto'] = $this->request->getVar('nome_completo');
        }
        if(!empty($this->request->getVar('email'))) {
            $data['Email'] = $this->request->getVar('email');
        }
        if(!empty($this->request->getVar('senha'))) {
            $data['Senha'] = password_hash($this->request->getVar('senha'), PASSWORD_BCRYPT);
        }
        if(!empty($this->request->getVar('imagem'))) {
            $data['ImagemPerfil'] = $this->request->getVar('imagem');
        }
        if(!empty($this->request->getVar('tipoUsuario'))) {
            $data['TipoAcesso'] = $this->request->getVar('tipoUsuario');
        }
        if(!empty($data) && !empty($id)) {
            $usuarioModel->update($id, $data);
            $session = session();
            $data['usuario'] = $usuarioModel->where('id', $session->get('ID'))->first();
            $session->set($data['usuario']);
        }
        $usuarios['usuarios'] = $usuarioModel->listar_usuarios_cadastrados();
        return view('dashboard_comum', $usuarios);
    }
 
    public function remover($id = null){
        $usuarioModel = new UsuarioModel();
        $data['user'] = $usuarioModel->where('id', $id)->delete($id);
        $usuarios['usuarios'] = $usuarioModel->listar_usuarios_cadastrados();
        return view('dashboard_admin', $usuarios);
    }

    
    public function login()
    {
        $usuarioModel = new UsuarioModel();
        $session = session();
        
        if($usuarioModel->validar_login($this->request->getVar('usuario'),$this->request->getVar('senha'))) {
            $tipo_usuario = $session->get('TipoAcesso');
            switch ($tipo_usuario) {
                case 1:
                    return view('dashboard_comum');
                    break;
                case 999:
                    $usuarios['usuarios'] = $usuarioModel->listar_usuarios_cadastrados();
                    return view('dashboard_admin', $usuarios);
                    break;
                case 0:
                    return view('erro');
                    break;
                default:
                    return view('erro');
                    break;
            }
        }else {
            return view('error');
        }
    }

    public function sair() {
        $session = session();
        $session->destroy();
        return view('home');
    }
}