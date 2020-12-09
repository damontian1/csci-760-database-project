@extends("layouts.app")

@section("content")
<!-- <h1>Find your Sales Rep</h1>
<label for="">Enter your Sales Rep Number</label>
<input type="text" style="max-width: 500px">
<input type="submit"> -->

@if (session('success'))
	 <!-- Alert Success -->
	 <div
         class="bg-green-100 flex items-center mx-2 mx-auto px-6 py-4 rounded-md text-lg"
         >
      <svg
           viewBox="0 0 24 24"
           class="text-green-600 w-5 h-5 sm:w-5 sm:h-5 mr-3"
           >
        <path
              fill="currentColor"
              d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z"
              ></path>
      </svg>
      <span class="text-green-800">{{ session('success') }}</span>
    </div>
    <!-- End Alert Success -->
@endif

<div class="bg-white flex flex-col p-8 items-center">
  <h1 class="text-4xl font-extrabold mb-10">Holt Distributors Database</h1>
  <div x-data="{ tab: 'territory' }" class="max-w-6xl w-full">
    <nav
      class="flex"
    >
      <button
        x-on:click="tab = 'territory'"
        x-bind:class="{ 'bg-yellow-500 font-bold font-bold': tab === 'territory' }"
        class="bg-transparent text-sm px-4 py-2 focus:outline-none capitalize"
      >
        territories
      </button>
      <button
        x-on:click="tab = 'sales-rep'"
        x-bind:class="{ 'bg-yellow-500 font-bold border-white': tab === 'sales-rep' }"
        class="bg-transparent text-sm py-2 focus:outline-none capitalize px-4"
      >
        sales reps
      </button>
			<button
        x-on:click="tab = 'customers'"
        x-bind:class="{ 'bg-yellow-500 font-bold': tab === 'customers' }"
        class="bg-transparent text-sm px-4 py-2 focus:outline-none capitalize"
      >
        customers
      </button>
      <button
        x-on:click="tab = 'vendors'"
        x-bind:class="{ 'bg-yellow-500 font-bold border-white': tab === 'vendors' }"
        class="bg-transparent text-sm px-4 py-2 focus:outline-none capitalize"
      >
        vendors
      </button>
      <button
        x-on:click="tab = 'items'"
        x-bind:class="{ 'bg-yellow-500 font-bold': tab === 'items' }"
        class="bg-transparent text-sm px-4 py-2 focus:outline-none capitalize"
      >
        items
      </button>
			<button
        x-on:click="tab = 'orders'"
        x-bind:class="{ 'bg-yellow-500 font-bold': tab === 'orders' }"
        class="bg-transparent text-sm px-4 py-2 focus:outline-none capitalize"
      >
        orders
      </button>
			<button
        x-on:click="tab = 'invoice'"
        x-bind:class="{ 'bg-yellow-500 font-bold': tab === 'invoice' }"
        class="bg-transparent text-sm px-4 py-2 focus:outline-none capitalize"
      >
        view invoice
      </button>
			<button
        x-on:click="tab = 'open_orders'"
        x-bind:class="{ 'bg-yellow-500 font-bold': tab === 'open_orders' }"
        class="bg-transparent text-sm px-4 py-2 focus:outline-none capitalize"
      >
        view open orders
      </button>
    </nav>
    <ul class="bg-gray-100 text-sm px-8 py-12" style="border: 1px solid #ccc">

			<li x-show="tab === 'territory'">

        <div class="bg-white border-2 flex flex-col max-w-lg mx-auto px-4 py-8 space-y-6" style="border: 1px solid #ccc">
        <h1 class="text-2xl font-extrabold">Add New Territory</h1>

				<form action="/database_actions_territory" method="POST" class="flex flex-col space-y-5">
				@csrf
				<label class="block">
					<span class="text-gray-900">TerritoryName</span>
					<input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="TerritoryName">
				</label>
				<button type="submit" class="block ml-auto mt-5 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
							Save
						</button>
				</form>


      </li>

      <li x-show="tab === 'sales-rep'">
        <div class="bg-white border-2 flex flex-col max-w-lg mx-auto px-4 py-8 space-y-6" style="border: 1px solid #ccc">
        <h1 class="text-2xl font-extrabold">Add Sales Rep</h1>

				<form action="/database_actions_sales_rep" method="POST" class="flex flex-col space-y-5">
				@csrf
        <!-- This is an example component -->
        <div class="relative inline-flex">
          <select class="w-full border border-gray-300 text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none" name="TerritoryNumber">
            <option>Choose a Territory</option>
            <option value="1">1 - New York</option>
          </select>
        </div>
        <label class="block">
          <span class="text-gray-900">SalesRepName</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="SalesRepName">
        </label>
        <label class="block">
          <span class="text-gray-900">SalesRepAddress</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="SalesRepAddress">
        </label>
        <label class="block">
          <span class="text-gray-900">SalesRepCity</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="SalesRepCity">
        </label>
        <label class="block">
          <span class="text-gray-900">SalesRepState</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="SalesRepState">
        </label>
        <label class="block">
          <span class="text-gray-900">SalesRepZip</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="SalesRepZip">
        </label>
        <label class="block">
          <span class="text-gray-900">SalesRepMTDSales</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="SalesRepMTDSales">
        </label>
        <label class="block">
          <span class="text-gray-900">SalesRepYTDSales</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="SalesRepYTDSales">
        </label>
        <label class="block">
          <span class="text-gray-900">SalesRepMTDCommission</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="SalesRepMTDCommission">
        </label>
        <label class="block">
          <span class="text-gray-900">SalesRepYTDCommission</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="SalesRepYTDCommission">
        </label>
        <label class="block">
          <span class="text-gray-900">SalesRepCommissionRate</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="SalesRepCommissionRate">
        </label>
				<button type="submit" class="block ml-auto mt-5 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
							Save
						</button>
				</form>
        </div>
      </li>
      <li x-show="tab === 'customers'">
      <div class="bg-white border-2 flex flex-col max-w-lg mx-auto px-4 py-8 space-y-6" style="border: 1px solid #ccc">
        <h1 class="text-2xl font-extrabold">Add Customer</h1>

				<form action="/database_actions_customer" method="POST" class="flex flex-col space-y-5">
				@csrf
        <label class="block">
          <span class="text-gray-900">customer_name</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="customer_name">
        </label>
        <label class="block">
          <span class="text-gray-900">customer_address</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="customer_address">
        </label>
        <label class="block">
          <span class="text-gray-900">customer_city</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="customer_city">
        </label>
        <label class="block">
          <span class="text-gray-900">customer_state</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="customer_state">
        </label>
        <label class="block">
          <span class="text-gray-900">customer_zip</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="customer_zip">
        </label>
        <label class="block">
          <span class="text-gray-900">customer_mtd_sales</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="customer_mtd_sales">
        </label>
        <label class="block">
          <span class="text-gray-900">customer_ytd_sales</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="customer_ytd_sales">
        </label>
        <label class="block">
          <span class="text-gray-900">customer_balance</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="customer_balance">
        </label>
        <label class="block">
          <span class="text-gray-900">customer_credit_limit</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="customer_credit_limit">
        </label>
				<button type="submit" class="block ml-auto mt-5 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
							Save
						</button>
				</form>
        </div>
      </li>
      <li x-show="tab === 'vendors'">
      <div class="bg-white border-2 flex flex-col max-w-lg mx-auto px-4 py-8 space-y-6" style="border: 1px solid #ccc">
        <h1 class="text-2xl font-extrabold">Add Vendor</h1>

				<form action="/database_actions_vendor" method="POST" class="flex flex-col space-y-5">
				@csrf
        <label class="block">
          <span class="text-gray-900">vendor_name</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="vendor_name">
        </label>
        <label class="block">
          <span class="text-gray-900">vendor_address</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="vendor_address">
        </label>
        <label class="block">
          <span class="text-gray-900">vendor_city</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="vendor_city">
        </label>
        <label class="block">
          <span class="text-gray-900">vendor_state</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="vendor_state">
        </label>
        <label class="block">
          <span class="text-gray-900">vendor_zip</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="vendor_zip">
        </label>
				<button type="submit" class="block ml-auto mt-5 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
							Save
						</button>
				</form>
        </div>
      </li>
			<li x-show="tab === 'items'">
        <div class="bg-white border-2 flex flex-col max-w-lg mx-auto px-4 py-8 space-y-6" style="border: 1px solid #ccc">
          <h1 class="text-2xl font-extrabold">Add Item</h1>

          <form action="/database_actions_item" method="POST" class="flex flex-col space-y-5">
          @csrf
          <label class="block">
            <span class="text-gray-900">item_description</span>
            <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="item_description">
          </label>
          <label class="block">
            <span class="text-gray-900">item_price</span>
            <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="item_price">
          </label>
          <button type="submit" class="block ml-auto mt-5 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Save
              </button>
          </form>
        </div>
      </li>
			<li x-show="tab === 'orders'">
        <div class="bg-white border-2 flex flex-col max-w-lg mx-auto px-4 py-8 space-y-6" style="border: 1px solid #ccc">
          <h1 class="text-2xl font-extrabold">Add Order</h1>

          <form action="/database_actions_item" method="POST" class="flex flex-col space-y-5">
          @csrf
          <label class="block">
            <span class="text-gray-900">customer_id</span>
            <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="customer_id">
          </label>
          <label class="block">
            <span class="text-gray-900">item_id</span>
            <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="item_id">
          </label>
          <button type="submit" class="block ml-auto mt-5 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Save
              </button>
          </form>
        </div>
      </li>
			<li x-show="tab === 'invoice'">
              <!-- component -->

        <div class="container mx-auto px-4 sm:px-8">
          <div class="py-8">
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
              <div class="inline-block min-w-full shadow rounded-sm overflow-hidden">
                <table class="min-w-full leading-normal">
                <thead>
                  <tr>
                    <th class="px-2 py-3 bg-gray-200 text-gray-900 border-b-2 text-left text-xs font-semibold uppercase tracking-wider">
                      Invoice No.
                    </th>
                    <th class="px-2 py-3 bg-gray-200 text-gray-900 border-b-2 text-left text-xs font-semibold uppercase tracking-wider">
                      Sold to
                    </th>
                    <th class="px-2 py-3 bg-gray-200 text-gray-900 border-b-2 text-left text-xs font-semibold uppercase tracking-wider">
                      Order Date
                    </th>
                    <th class="px-2 py-3 bg-gray-200 text-gray-900 border-b-2 text-left text-xs font-semibold uppercase tracking-wider">
                      Customer No.
                    </th>
                    <th class="px-2 py-3 bg-gray-200 text-gray-900 border-b-2 text-left text-xs font-semibold uppercase tracking-wider">
                      Item No.
                    </th>
                    <th class="px-2 py-3 bg-gray-200 text-gray-900 border-b-2 text-left text-xs font-semibold uppercase tracking-wider">
                      Item Description
                    </th>
                  </tr>
                </thead>


                @isset ($invoice_data)



        @foreach ($invoice_data as $data)

            <tbody>
              <tr>
                <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                  <div class="flex items-center">
                    <div class="ml-3">
                      <p class="text-gray-900 whitespace-no-wrap">
                      {{ $data->id }}
                      </p>
                    </div>
                  </div>
                </td>
                <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                  <div class="flex items-center">
                    <div class="ml-3">
                      <p class="text-gray-900 whitespace-no-wrap">
                      {{ $data->customer_name }}
                      </p>
                    </div>
                  </div>
                </td>
                <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                  <div class="flex items-center">
                    <div class="ml-3">
                      <p class="text-gray-900 whitespace-no-wrap">
                      {{ $data->date }}
                      </p>
                    </div>
                  </div>
                </td>
                <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                  <div class="flex items-center">
                    <div class="ml-3">
                      <p class="text-gray-900 whitespace-no-wrap">
                      {{ $data->customer_id }}
                      </p>
                    </div>
                  </div>
                </td>
                <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                  <div class="flex items-center">
                    <div class="ml-3">
                      <p class="text-gray-900 whitespace-no-wrap">
                      {{ $data->item_id }}
                      </p>
                    </div>
                  </div>
                </td>
                <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                  <div class="flex items-center">
                    <div class="ml-3">
                      <p class="text-gray-900 whitespace-no-wrap">
                      {{ $data->item_description }}
                      </p>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
        @endforeach
        @endisset
              </table>
            </div>
          </div>
        </div>
      </div>


      </li>
			<li x-show="tab === 'open_orders'">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero iusto expedita sunt dicta..
      </li>
    </ul>
  </div>
</div>
@endsection