<form action="/purchase" method="POST">
    <script
      src="https://checkout.stripe.com/checkout.js"
      class="stripe-button"
      data-key="pk_test_51BTUDGJAJfZb9HEBwDg86TN1KNprHjkfipXmEDMb0gSCassK5T3ZfxsAbcgKVmAIXF7oZ6ItlZZbXO6idTHE67IM007EwQ4uN3"
      data-name="Organic Fertillizer"
      data-image="{{ asset('images/Ak.png') }}"
      data-description="Order Your Fertillizers now"
      data-amount="10000"
      data-currency="usd">
    </script>
  </form>