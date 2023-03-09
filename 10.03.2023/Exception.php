<?php
function getCustomerDetails($customerId) {

    if ($customerId == 0) {
      throw new Exception('Invalid customer ID');
    }
    return array(
      'id' => $customerId,
      'name' => 'Sridharan',
      'email' => 'sridharan01234@gmail.com'
    );
  }
  
  try {
    $customer = getCustomerDetails(0);
    echo "Customer ID: {$customer['id']}\n";
    echo "Customer Name: {$customer['name']}\n";
    echo "Customer Email: {$customer['email']}\n";
  } catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n"; // Error message is printed 'Invalid customer ID'
  }
  
?>