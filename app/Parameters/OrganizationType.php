<?php

namespace App\Parameters;

enum OrganizationType: int
{
  case Pending = 1;
  case Processing = 2;
  case Completed = 3;
  case Cancelled = 4;
}
