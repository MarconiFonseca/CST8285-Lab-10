<?php


require_once('header.php');
require_once('dao/customerDAO.php');


$customerDAO = new customerDAO;
$customers = $customerDAO->getCustomers();

if ($customers) {
    echo '<table width = "100%" border = \'2\'>';
    echo '<tr>';
    echo '<th>customer</th>';
    echo '<th>phone number</th>';
    echo '<th>email address</th>';
    echo '<th>referrer</th>';
    echo '</tr>';


    foreach ($customers as $customer) {
        echo '<tr>';
        echo '<td>' . $customer->getName() . '</td>';
        echo '<td>' . $customer->getPhone() . '</td>';
        echo '<td>' . $customer->getEmail() . '</td>';
        echo '<td>' . $customer->getReferrer() . '</td>';
        echo '</tr>';
    }
    echo '</table>';
}
else{
		echo '<h3>'.'There is no customer data in the list '.'</h3>';
}


?>

<?php include 'footer.php';?>
