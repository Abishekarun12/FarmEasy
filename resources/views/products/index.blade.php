<x-front-guest-layout>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900&display=swap" rel="stylesheet">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h1 class="text-4xl lg:text-6xl leading-none mb-4">Fertillizer Products</h1>
            
        </div>
        <div class="bg-white shadow-md rounded my-6">
            <div class="w-full">
                <table class="min-w-full bg-white">
                  <thead>
                    <tr>
                      <th class="py-2 px-4 border-b">Image</th>
                      <th class="py-2 px-4 border-b">Name</th>
                      <th class="py-2 px-4 border-b">Details</th>
                      <th class="py-2 px-4 border-b" width="280px">Action</th>
                    </tr>
                    @foreach ($products as $product)
                  </thead>
                  <tbody>
                    <tr>
                      <td class="py-2 px-4 border-b">
                        <img src="https://media.istockphoto.com/id/967945790/photo/organic-manure.jpg?s=612x612&w=0&k=20&c=llq4E1IAwtsdIBpuRUbknDMXmOr4KfxafeKeCn3K9qQ=" width="100px" alt="">
                      </td>
                      <td class="py-2 px-4 border-b">{{ $product->name }}</td>
                      <td class="py-2 px-4 border-b">{{ $product->details }}</td>
                      <td class="py-2 px-4 border-b"> <form action="/purchase" method="POST">
                        <script
                          src="https://checkout.stripe.com/checkout.js"
                          class="stripe-button"
                          data-key="pk_test_51BTUDGJAJfZb9HEBwDg86TN1KNprHjkfipXmEDMb0gSCassK5T3ZfxsAbcgKVmAIXF7oZ6ItlZZbXO6idTHE67IM007EwQ4uN3"
                          data-name="Organic Fertillizer"
                          data-image="{{ asset('images/Ak.png') }}"
                          data-description="Order Your Fertillizers now"
                          data-amount="10000"
                          data-currency="inr">
                        </script>
                        <br>
                        <div class="ont-semibold text-lg bg-red-500 hover:bg-blue-400 text-white rounded-full">
                            <a class= "btn btn-success" href="https://apiportal.axisbank.com/portal/forum/2">
                               Apply Loan at Axis.!
                            </a>
                            </div>
                      </form></td>
                    </tr>
                    @endforeach
                    
          </table>
          
          
</x-front-guest-layout>
