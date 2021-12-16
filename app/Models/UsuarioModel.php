<?php 
namespace App\Models;
use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuarios';

    protected $primaryKey = 'ID';
    
    protected $allowedFields = ['NomeCompleto', 'CPF', 'Senha','Email', 'ImagemPerfil','TipoAcesso'];


    public function validar_login($email, $senha) {
        if(!empty($email) && !empty($senha)) {
            $data['usuario'] = $this->where('email', $email)->first();
            if(!empty($data['usuario'])) {
                if(password_verify($senha, $data['usuario']['Senha'])) {
                    $session = session();
                    $session->set($data['usuario']);
                    return true;
                }
            }else {
                return false;
            }
        }else {
            return false;
        }
        
    }

    public function listar_usuarios_cadastrados() {
        return $this->findAll();
    }
}