
      // Initialize an empty cart
      let cart = [];

      // Add item to the cart
      function addToCart(item) {
        cart.push(item);
      }

      // Render cart items
      function renderCart() {
        const cartItemsElement = document.querySelector('.cart-items');
        cartItemsElement.innerHTML = '';
        cart.forEach(item => {
          const itemElement = document.createElement('li');
          itemElement.innerText = item;
          cartItemsElement.appendChild(itemElement);
        });
      }

      // Handle buy button click
      function handleBuyButtonClick() {
        alert('Thank you for your purchase!');
        cart = [];
        renderCart();
      }

      // Attach event listeners
      document.querySelector('.buy-button').addEventListener('click', handleBuyButtonClick);
      document.querySelector('.profile-button').addEventListener('click', function() {
        document.querySelector('.cart-sidebar').classList.toggle('open');
      });

      // Example usage
      addToCart('Item 1');
      addToCart('Item 2');
      renderCart();
  