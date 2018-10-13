# mot-history

This PHP class provides a means to access the DVLA MOT History API.

## Usage
```php
<?php

include('mot_history.php');

$motHistory = new mot_history("API-KEY");
$motHistoryResults = $motHistory->getMotHistory("YF58DVT");

foreach($motHistoryResults as $motResult) {
    echo $motResult['completedDate'] . ' - ' . $motResult['testResult'] . PHP_EOL;
}

?>
```

## System Requirements
* PHP Version 5.4

## Licensing
Copyright (C) 2018 Alexander Marston (alexander.marston@gmail.com)

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
