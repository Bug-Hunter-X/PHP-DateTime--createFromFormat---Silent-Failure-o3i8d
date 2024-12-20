```php
$dateString = '2024-03-31T12:00:00';
$dateTime = DateTime::createFromFormat('Y-m-d\TH:i:s', $dateString);

if ($dateTime === false) {
  // Handle the error appropriately
  echo 'Error creating DateTime object.';
} else {
  echo $dateTime->format('Y-m-d H:i:s');
}
```