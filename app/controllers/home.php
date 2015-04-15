<?php

/**
 *
 */
class Home extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->user = $this->model('User');
    }

    public function index($name = '')
    {
        $user = $this->user;
        $user->name = $name;

        $this->view('home/index', ['name' => $user->name]);

        //User::find(1)->username;

       // $conn = new MongoClient('localhost:27017');

        //$mongoDB = new Mongo();
        //$database = $mongoDB->selectDB("example");

        //var_dump($conn);



    }

    public function create($username = '', $email = '')
    {

        User::create(['username' => $username,
            'email' => $email]);
//        $this->user->create([
//            'username' => $username,
//            'email' => $email
//        ]);
    }
}