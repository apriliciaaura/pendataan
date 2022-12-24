<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

$get1 = mysqli_query($conn, "select * from peminjaman");
$count1 = mysqli_num_rows($get1);