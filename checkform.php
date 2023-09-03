<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Weather Wizards Registration Submission Receipt</title>
</head>
<body>
<?php 

# checkform.php
# Created 29 Aug 2023
# Created by Hannah Holmes
# This script handles the form created for my CPT 283 PHP class assignment 2

extract($_POST);

// declare variables

// child name
if (!empty($_POST['childName'])) 
{
    $childName = $_POST['childName'];
} 
else 
{
    $childName = NULL;
    echo '<p class="error">You forgot to enter your name!</p>';
}

// parent name
if (!empty($_POST['parentName'])) 
{
    $parentName = $_POST['parentName'];
} 
else 
{
    $parentName = NULL;
    echo '<p class="error">You forgot to enter your parent or guardian\'s name!</p>';
}

// email
if (!empty($_POST['email'])) 
{
    $email = $_POST['email'];
} 
else 
{
    $email = NULL;
    echo '<p class="error">You forgot to enter your parent or guardian\'s email address!</p>';
}

// phone
if (!empty($_POST['phone'])) 
{
    $phone = $_POST['phone'];
} 
else 
{
    $phone = NULL;
    echo '<p class="error">You forgot to enter your parent or guardian\'s phone number!</p>';
}

// membership status
if (!empty($_POST['membershipStatus'])) 
{
    $membershipStatus = $_POST['membershipStatus'];
} 
else 
{
    $membershipStatus = NULL;
    echo '<p class="error">You forgot to enter your membership status!</p>';
}

// location (do i need this here ?)
if (!empty($_POST['center'])) 
{
    $center = $_POST['center'];
} 
else 
{
    $center = NULL;
}

// selection to determine if all required fields were filled
if ($childName == NULL || $parentName == NULL || $email == NULL || $phone == NULL || $membershipStatus == NULL) 
{
    echo '<p class="error">Weather Wizard, we need your name, your parent or guardian\'s name, and their email and phone number to sign you up.
        Hit the back button on the browser and try again.</p>';
} 
else 
{
    echo "<p>Thank you for your submission, Weather Wizard! We will be in touch with your parent or guardian soon regarding workshop registration.</p>";

// selection to determine location confirmation message
    if ($center == 'charleston') 
    {
        echo "<p>You are nearest to our Charleston, SC location, the Holy City! Go River Dogs!";
    } 
    elseif ($center == 'summerville') 
    {
        echo "<p>You are nearest to our Summerville, SC location, the birthplace of Sweet Tea! Refreshing!";
    } 
    elseif ($center == 'mtpleasant') 
    {
        echo "<p>You are nearest to our Mt. Pleasant, SC location that has a historical and beachy vibe!";
    } 
    else 
    {
        echo "<p>Not sure of the closest location? We will send you an email to keep in touch!";
    }

// selection to determine membership confirmation message
    if ($membershipStatus == 'yes') 
    {
        echo "<p>Welcome back, $childName! Thank you for being a member of Weather Wizards.</p>";
    } 
    elseif ($membershipStatus == 'no') 
    {
        echo "<p>Hi, $childName, we hope you'll join Weather Wizards. We have more fun than a jar full of lightning bugs!</p>";
    } 
    else 
    {
        echo "<p>Hi, $childName! Welcome to Weather Wizards, where the forecast is always a 99% chance of fun!</p>";
    }

// foreach loop to print the name of each selected workshop
    if (isset($workshop))
    {
        echo "<p>You have chosen the following workshops.</p>";
        foreach ($workshop as $value)
        {
            echo "<p>$value</p>";
        }
    }
    else 
    {
        echo "<p>You have not chosen a workshop, but we add new workshops all the time. We'll keep you updated by e-mail.</p>";
    }
}



?>
</body>
</html>




