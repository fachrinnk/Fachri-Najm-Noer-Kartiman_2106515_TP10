<?php

namespace App\Models;

use CodeIgniter\Model;

class CompanyModel extends Model
{
  protected $table      = 'company';
  protected $primaryKey = 'company_id';

  public function get_company()
  {

    return $this->findAll();
  }
}
