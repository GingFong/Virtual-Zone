<?php
include_once("nav.php")
?>

    <!DOCTYPE html>
    <html>
    <head>
      <title>Product Payment Page</title>
      <style>
        .container {
          max-width: 800px;
          margin: 0 auto;
          padding: 20px;
        }
        .product-card {
          display: flex;
          flex-wrap: wrap;
          margin-bottom: 20px;
          padding: 10px;
          border: 1px solid #ccc;
          border-radius: 5px;
        }
        .product-card img {
          max-width: 200px;
          margin-right: 20px;
          flex: 1 0 200px;
          border-radius: 5px;
        }
        .product-card h2 {
          margin-top: 0;
          margin-bottom: 10px;
          flex: 1 1 100%;
        }
        .product-card p {
          margin: 0;
          flex: 1 1 100%;
        }
        .product-card button {
          padding: 10px;
          border: none;
          border-radius: 5px;
          background-color: #4CAF50;
          color: #fff;
          cursor: pointer;
        }
        .product-card button:hover {
          background-color: #3e8e41;
        }
        .payment-form {
          display: flex;
          flex-wrap: wrap;
          margin-top: 20px;
          padding: 10px;
          border: 1px solid #ccc;
          border-radius: 5px;
        }
        .payment-form label {
          flex: 1 0 200px;
          margin-right: 20px;
        }
        .payment-form input[type="text"],
        .payment-form input[type="number"],
        .payment-form input[type="email"],
        .payment-form input[type="submit"] {
          flex: 1 1 300px;
          padding: 5px;
          border-radius: 5px;
          border: none;
          margin-bottom: 10px;
          color: #000000;
        }
        .payment-form input[type="submit"] {
          background-color: #4CAF50;
          color: #fff;
          cursor: pointer;
        }
        .payment-form input[type="submit"]:hover {
          background-color: #3e8e41;
        }
      </style>
    </head>
    <body>
      <div class="container">
        <div class="product-card">
          <img src="https://picsum.photos/200/300" alt="Product Image">
          <div>
            <h2>Product Name</h2>
            <p>Description of the product goes here. This is just a placeholder text.</p>
            <p>Price: $10</p>
          </div>
        </div>
        <form class="payment-form" action="payment_gateway.php" method="post">
          <label for="card_number">Card Number:</label>
          <input type="text" id="card_number" name="card_number"><br><br>
          <label for="expiry_date">Expiry Date:</label>
          <input type="text" id="expiry_date" name="expiry_date"><br><br>
          <label for="cvv">CVV:</label>
          <input type="text" id="cvv" name="cvv"><br><br>
          <label for="amount">Amount:</label>
          <input type="text" id="amount" name="amount"><br><br>
          <input type="submit" value="Pay">
        </form>
        
    