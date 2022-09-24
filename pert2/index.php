<?php 

// function //
function tambah($a,$b)
{
    return $a + $b;
}

echo tambah(1,2);

echo '<br>';

function pangkat($a,$b)
{
    $hasil = 1;
    $i = 0;
    while ($i != $b) {
        $hasil = $hasil * $a;
        $i++;
    }
    return $hasil;
}

echo pangkat(2,3);

echo '<br>';

// array

$arr = array(
    'Negara' => 'Indonesia',
    'Provinsi' => [
        'Jawa Barat',
        'Jawa Tengah',
        'Jawa Timur'
    ],
    'jml_provinsi' => 32,
    'nama' => 'Indra Rusyana',
);

$arr2 = array(
    'Semangka','Mangga','Alpukat'
);

$arr[0] = 'Rusia';
array_push($arr,'test');
array_pop($arr);

// array to string
echo implode(' - ',$arr['Provinsi']);
echo '<br>';

// string to array
print_r (explode(' ',$arr['nama']));
echo '<br>';

// searching nilai array
echo in_array('Indonesia', $arr);
echo '<br>';

// penggabungan array
$arr_gabung = array_merge($arr,$arr2);
var_dump($arr_gabung);
echo '<br>';

// class
class Person{
    private string $name;
    public int $age;
    public float $salary;

    public function __construct($name,$age,$salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function getName()
    {
        return $this->name;
    }
    
    public function getSalary($salary)
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
}

$person1 = new Person('Indra','21',false);
echo $person1->getName();
echo $person1->age;
echo $person1->salary;

class Informatika extends Person
{
    public string $kelas;

    public function __construct($npm,$nama,$kelas)
    {
        $this->kelas = $kelas;
        parent::__construct($npm,$nama);
    }

    public function print_kelas()
    {
        echo 'Kelas nya '. parent::get_nama().' adalah '. $this->kelas;
    }
}




?>