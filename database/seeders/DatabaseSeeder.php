<?php

namespace Database\Seeders;

use App\Models\Branch;
use App\Models\Directorate;
use App\Models\Head;
use App\Models\Seller;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        //Usuários
        $this->users();

        //Diretorias
        $this->directorates();

        //Diretores
        $this->heads();

        //Unidades
        $this->branchs();

        //Vendedores
        $this->sellers();

    }

    public function users(): void
    {
        //Diretor Geral
       User::factory()->create([
        'id' => 1,
        'name' => 'Edson A. do Nascimento',
        'email' => 'pele@magazineaziul.com.br',
        'password' => $this->defaultPassword(),
        ]);

        //Diretores de Diretorias
        User::factory()->create([
            'id' => 2,
            'name' => 'Vagner Mancini',
            'email' => 'vagner.mancini@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);

        User::factory()->create([
            'id' => 3,
            'name' => 'Abel Ferreira',
            'email' => 'abel.ferreira@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);

        User::factory()->create([
            'id' => 4,
            'name' => 'Rogerio Ceni',
            'email' => 'rogerio.ceni@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);

        //Gerentes de Unidades
        User::factory()->create([
            'id' => 5,
            'name' => 'Ronaldinho Gaucho',
            'email' => 'ronaldinho.gaucho@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);

        User::factory()->create([
            'id' => 6,
            'name' => 'Roberto Firmino',
            'email' => 'roberto.firmino@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);

        User::factory()->create([
            'id' => 7,
            'name' => 'Alex de Souza',
            'email' => 'alex.de.souza@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);

        User::factory()->create([
            'id' => 8,
            'name' => 'Françoaldo Souza',
            'email' => 'françoaldo.souza@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);

        User::factory()->create([
            'id' => 9,
            'name' => 'Romário Faria',
            'email' => 'romário.faria@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);

        User::factory()->create([
            'id' => 10,
            'name' => 'Ricardo Goulart',
            'email' => 'ricardo.goulart@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);

        User::factory()->create([
            'id' => 11,
            'name' => 'Dejan Petkovic',
            'email' => 'dejan.petkovic@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);

        User::factory()->create([
            'id' => 12,
            'name' => 'Deyverson Acosta',
            'email' => 'deyverson.acosta@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);

        User::factory()->create([
            'id' => 13,
            'name' => 'Harlei Silva',
            'email' => 'harlei.silva@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);

        User::factory()->create([
            'id' => 14,
            'name' => 'Walter Henrique',
            'email' => 'walter.henrique@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);

        //Vendedores
        User::factory()->create([
            'id' => 15,
            'name' => 'Afonso Afancar',
            'email' => 'afonso.afancar@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);
        
        User::factory()->create([
            'id' => 16,
            'name' => 'Alceu Andreoli',
            'email' => 'alceu.andreoli@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);
        
        User::factory()->create([
            'id' => 17,
            'name' => 'Amalia Zago',
            'email' => 'amalia.zago@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);
        
        User::factory()->create([
            'id' => 18,
            'name' => 'Carlos Eduardo',
            'email' => 'carlos.eduardo@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);
        
        User::factory()->create([
            'id' => 19,
            'name' => 'Luiz Felipe',
            'email' => 'luiz.felipe@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);
        
        User::factory()->create([
            'id' => 20,
            'name' => 'Breno',
            'email' => 'breno@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);
        
        User::factory()->create([
            'id' => 21,
            'name' => 'Emanuel',
            'email' => 'emanuel@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);
        
        User::factory()->create([
            'id' => 22,
            'name' => 'Ryan',
            'email' => 'ryan@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);
        
        User::factory()->create([
            'id' => 23,
            'name' => 'Vitor Hugo',
            'email' => 'vitor.hugo@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);
        
        User::factory()->create([
            'id' => 24,
            'name' => 'Yuri',
            'email' => 'yuri@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);
        
        User::factory()->create([
            'id' => 25,
            'name' => 'Benjamin',
            'email' => 'benjamin@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);
        
        User::factory()->create([
            'id' => 26,
            'name' => 'Erick',
            'email' => 'erick@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);
        
        User::factory()->create([
            'id' => 27,
            'name' => 'Enzo Gabriel',
            'email' => 'enzo.gabriel@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);
        
        User::factory()->create([
            'id' => 28,
            'name' => 'Fernando',
            'email' => 'fernando@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);
        
        User::factory()->create([
            'id' => 29,
            'name' => 'Joaquim',
            'email' => 'joaquim@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);

        User::factory()->create([
            'id' => 30,
            'name' => 'André',
            'email' => 'andré@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);

        User::factory()->create([
            'id' => 31,
            'name' => 'Raul',
            'email' => 'raul@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);

        User::factory()->create([
            'id' => 32,
            'name' => 'Marcelo',
            'email' => 'marcelo@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);

        User::factory()->create([
            'id' => 33,
            'name' => 'Julio César',
            'email' => 'julio.césar@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);

        User::factory()->create([
            'id' => 34,
            'name' => 'Cauê',
            'email' => 'cauê@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);

        User::factory()->create([
            'id' => 35,
            'name' => 'Benício',
            'email' => 'benício@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);

        User::factory()->create([
            'id' => 36,
            'name' => 'Vitor Gabriel',
            'email' => 'vitor.gabriel@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);

        User::factory()->create([
            'id' => 37,
            'name' => 'Augusto',
            'email' => 'augusto@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);

        User::factory()->create([
            'id' => 38,
            'name' => 'Pedro Lucas',
            'email' => 'pedro.lucas@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);

        User::factory()->create([
            'id' => 39,
            'name' => 'Luiz Gustavo',
            'email' => 'luiz.gustavo@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);
        
        User::factory()->create([
            'id' => 40,
            'name' => 'Giovanni',
            'email' => 'giovanni@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);
        
        User::factory()->create([
            'id' => 41,
            'name' => 'Renato',
            'email' => 'renato@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);
        
        User::factory()->create([
            'id' => 42,
            'name' => 'Diego',
            'email' => 'diego@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);
        
        User::factory()->create([
            'id' => 43,
            'name' => 'João Paulo',
            'email' => 'joão.paulo@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);
        
        User::factory()->create([
            'id' => 44,
            'name' => 'Renan',
            'email' => 'renan@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);
        
        User::factory()->create([
            'id' => 45,
            'name' => 'Luiz Fernando',
            'email' => 'luiz.fernando@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);
        
        User::factory()->create([
            'id' => 46,
            'name' => 'Anthony',
            'email' => 'anthony@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);
        
        User::factory()->create([
            'id' => 47,
            'name' => 'Lucas Gabriel',
            'email' => 'lucas.gabriel@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);
        
        User::factory()->create([
            'id' => 48,
            'name' => 'Thales',
            'email' => 'thales@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);
        
        User::factory()->create([
            'id' => 49,
            'name' => 'Luiz Miguel',
            'email' => 'luiz.miguel@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);
        
        User::factory()->create([
            'id' => 50,
            'name' => 'Henry',
            'email' => 'henry@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);
        
        User::factory()->create([
            'id' => 51,
            'name' => 'Marcos Vinicius',
            'email' => 'marcos.vinicius@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);
        
        User::factory()->create([
            'id' => 52,
            'name' => 'Kevin',
            'email' => 'kevin@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);
        
        User::factory()->create([
            'id' => 53,
            'name' => 'Levi',
            'email' => 'levi@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);
        
        User::factory()->create([
            'id' => 54,
            'name' => 'Enrico',
            'email' => 'enrico@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);
        
        User::factory()->create([
            'id' => 55,
            'name' => 'João Lucas',
            'email' => 'joão.lucas@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);
        
        User::factory()->create([
            'id' => 56,
            'name' => 'Hugo',
            'email' => 'hugo@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);
        
        User::factory()->create([
            'id' => 57,
            'name' => 'Luiz Guilherme',
            'email' => 'luiz.guilherme@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);
        
        User::factory()->create([
            'id' => 58,
            'name' => 'Matheus Henrique',
            'email' => 'matheus.henrique@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);
        
        User::factory()->create([
            'id' => 59,
            'name' => 'Miguel',
            'email' => 'miguel@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);
        
        User::factory()->create([
            'id' => 60,
            'name' => 'Davi',
            'email' => 'davi@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);
        
        User::factory()->create([
            'id' => 61,
            'name' => 'Gabriel',
            'email' => 'gabriel@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);
        
        User::factory()->create([
            'id' => 62,
            'name' => 'Arthur',
            'email' => 'arthur@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);
        
        User::factory()->create([
            'id' => 63,
            'name' => 'Lucas',
            'email' => 'lucas@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);
        
        User::factory()->create([
            'id' => 64,
            'name' => 'Matheus',
            'email' => 'matheus@magazineaziul.com.br',
            'password' => $this->defaultPassword(),
        ]);    

    }

    public function directorates(){

        Directorate::factory()->create([
            'id' => 1,
            'name' => 'Sul',
        ]);

        Directorate::factory()->create([
            'id' => 2,
            'name' => 'Sudeste',
        ]);

        Directorate::factory()->create([
            'id' => 3,
            'name' => 'Centro-oeste',
        ]);
    }

    public function heads(){

        //Diretor Geral
        Head::factory()->create([
            'head_id' => 1,
            'directorate_id' => 1,
        ]);

        Head::factory()->create([
            'head_id' => 1,
            'directorate_id' => 2,
        ]);

        Head::factory()->create([
            'head_id' => 1,
            'directorate_id' => 3,
        ]);
        

        //Diretores de Diretorias
        Head::factory()->create([
            'head_id' => 2,
            'directorate_id' => 1,
        ]);

        Head::factory()->create([
            'head_id' => 3,
            'directorate_id' => 2,
        ]);

        Head::factory()->create([
            'head_id' => 4,
            'directorate_id' => 3,
        ]);

    }

    public function branchs(){

        //Sul
        Branch::factory()->create([
            'id' => 1,
            'name' => 'Porto Alegre',
            'latitude' => '-30.048750057541955',
            'longitude' => '-51.228587422990806',
            'manager_id' => 5,
            'directorate_id' => 1,
        ]);

        Branch::factory()->create([
            'id' => 2,
            'name' => 'Florianopolis',
            'latitude' => '-27.55393525017396',
            'longitude' => '-48.49841515885026',
            'manager_id' => 6,
            'directorate_id' => 1,
        ]);

        Branch::factory()->create([
            'id' => 3,
            'name' => 'Curitiba',
            'latitude' => '-25.473704465731746',
            'longitude' => '-49.24787198992874',
            'manager_id' => 7,
            'directorate_id' => 1,
        ]);

        //Sudeste

        Branch::factory()->create([
            'id' => 4,
            'name' => 'Sao Paulo',
            'latitude' => '-23.544259437612844',
            'longitude' => '-46.64370714029131',
            'manager_id' => 8,
            'directorate_id' => 2,
        ]);

        Branch::factory()->create([
            'id' => 5,
            'name' => 'Rio de Janeiro',
            'latitude' => '-22.923447510604802',
            'longitude' => '-43.23208495438858',
            'manager_id' => 9,
            'directorate_id' => 2,
        ]);

        Branch::factory()->create([
            'id' => 6,
            'name' => 'Belo Horizonte',
            'latitude' => '-19.917854829716372',
            'longitude' => '-43.94089385954766',
            'manager_id' => 10,
            'directorate_id' => 2,
        ]);

        Branch::factory()->create([
            'id' => 7,
            'name' => 'Vitória',
            'latitude' => '-20.340992420772206',
            'longitude' => '-40.38332271475097',
            'manager_id' => 11,
            'directorate_id' => 2,
        ]);

        //Centro-oeste

        Branch::factory()->create([
            'id' => 8,
            'name' => 'Campo Grande',
            'latitude' => '-20.462652006300377',
            'longitude' => '-54.615658937666645',
            'manager_id' => 12,
            'directorate_id' => 3,
        ]);

        Branch::factory()->create([
            'id' => 9,
            'name' => 'Goiânia',
            'latitude' => '-16.673126240814387',
            'longitude' => '-49.25248826354209',
            'manager_id' => 13,
            'directorate_id' => 3,
        ]);

        Branch::factory()->create([
            'id' => 10,
            'name' => 'Cuiabá',
            'latitude' => '-15.601754458320842',
            'longitude' => '-56.09832706558089',
            'manager_id' => 14,
            'directorate_id' => 3,
        ]);
    }

    public function sellers(){
        //Belo Horizonte
        Seller::factory()->create([
            'branch_id' => 6,
            'seller_id' => 15,
        ]);

        Seller::factory()->create([
            'branch_id' => 6,
            'seller_id' => 16,
        ]);

        Seller::factory()->create([
            'branch_id' => 6,
            'seller_id' => 17,
        ]);

        Seller::factory()->create([
            'branch_id' => 6,
            'seller_id' => 18,
        ]);

        Seller::factory()->create([
            'branch_id' => 6,
            'seller_id' => 19,
        ]);

        //Campo Grande
        Seller::factory()->create([
            'branch_id' => 8,
            'seller_id' => 20,
        ]);

        Seller::factory()->create([
            'branch_id' => 8,
            'seller_id' => 21,
        ]);

        Seller::factory()->create([
            'branch_id' => 8,
            'seller_id' => 22,
        ]);

        Seller::factory()->create([
            'branch_id' => 8,
            'seller_id' => 23,
        ]);

        Seller::factory()->create([
            'branch_id' => 8,
            'seller_id' => 24,
        ]);

        //Cuiabá

        Seller::factory()->create([
            'branch_id' => 10,
            'seller_id' => 25,
        ]);

        Seller::factory()->create([
            'branch_id' => 10,
            'seller_id' => 26,
        ]);

        Seller::factory()->create([
            'branch_id' => 10,
            'seller_id' => 27,
        ]);

        Seller::factory()->create([
            'branch_id' => 10,
            'seller_id' => 28,
        ]);

        Seller::factory()->create([
            'branch_id' => 10,
            'seller_id' => 29,
        ]);

        //Curitiba

        Seller::factory()->create([
            'branch_id' => 3,
            'seller_id' => 30,
        ]);

        Seller::factory()->create([
            'branch_id' => 3,
            'seller_id' => 31,
        ]);

        Seller::factory()->create([
            'branch_id' => 3,
            'seller_id' => 32,
        ]);

        Seller::factory()->create([
            'branch_id' => 3,
            'seller_id' => 33,
        ]);

        Seller::factory()->create([
            'branch_id' => 3,
            'seller_id' => 34,
        ]);

        //Florianopolis

        Seller::factory()->create([
            'branch_id' => 2,
            'seller_id' => 35,
        ]);

        Seller::factory()->create([
            'branch_id' => 2,
            'seller_id' => 36,
        ]);

        Seller::factory()->create([
            'branch_id' => 2,
            'seller_id' => 37,
        ]);

        Seller::factory()->create([
            'branch_id' => 2,
            'seller_id' => 38,
        ]);

        Seller::factory()->create([
            'branch_id' => 2,
            'seller_id' => 39,
        ]);

        //Goiânia

        Seller::factory()->create([
            'branch_id' => 9,
            'seller_id' => 40,
        ]);

        Seller::factory()->create([
            'branch_id' => 9,
            'seller_id' => 41,
        ]);

        Seller::factory()->create([
            'branch_id' => 9,
            'seller_id' => 42,
        ]);

        Seller::factory()->create([
            'branch_id' => 9,
            'seller_id' => 43,
        ]);

        Seller::factory()->create([
            'branch_id' => 9,
            'seller_id' => 44,
        ]);

        //Porto Alegre

        Seller::factory()->create([
            'branch_id' => 1,
            'seller_id' => 45,
        ]);

        Seller::factory()->create([
            'branch_id' => 1,
            'seller_id' => 46,
        ]);

        Seller::factory()->create([
            'branch_id' => 1,
            'seller_id' => 47,
        ]);

        Seller::factory()->create([
            'branch_id' => 1,
            'seller_id' => 48,
        ]);

        Seller::factory()->create([
            'branch_id' => 1,
            'seller_id' => 49,
        ]);

        //Rio de Janeiro

        Seller::factory()->create([
            'branch_id' => 5,
            'seller_id' => 50,
        ]);

        Seller::factory()->create([
            'branch_id' => 5,
            'seller_id' => 51,
        ]);

        Seller::factory()->create([
            'branch_id' => 5,
            'seller_id' => 52,
        ]);

        Seller::factory()->create([
            'branch_id' => 5,
            'seller_id' => 53,
        ]);

        Seller::factory()->create([
            'branch_id' => 5,
            'seller_id' => 54,
        ]);

        //Sao Paulo

        Seller::factory()->create([
            'branch_id' => 4,
            'seller_id' => 55,
        ]);

        Seller::factory()->create([
            'branch_id' => 4,
            'seller_id' => 56,
        ]);

        Seller::factory()->create([
            'branch_id' => 4,
            'seller_id' => 57,
        ]);

        Seller::factory()->create([
            'branch_id' => 4,
            'seller_id' => 58,
        ]);

        Seller::factory()->create([
            'branch_id' => 4,
            'seller_id' => 59,
        ]);

        //Vitória

        Seller::factory()->create([
            'branch_id' => 7,
            'seller_id' => 60,
        ]);

        Seller::factory()->create([
            'branch_id' => 7,
            'seller_id' => 61,
        ]);

        Seller::factory()->create([
            'branch_id' => 7,
            'seller_id' => 62,
        ]);

        Seller::factory()->create([
            'branch_id' => 7,
            'seller_id' => 63,
        ]);

        Seller::factory()->create([
            'branch_id' => 7,
            'seller_id' => 64,
        ]);

    }

    public function defaultPassword(): string
    {
        return Hash::make('123mudar');
    }
}
