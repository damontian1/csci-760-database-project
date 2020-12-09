@extends("layouts.app")

@section("content")
<!-- <h1>Find your Sales Rep</h1>
<label for="">Enter your Sales Rep Number</label>
<input type="text" style="max-width: 500px">
<input type="submit"> -->

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
        territory
      </button>
      <button
        x-on:click="tab = 'sales-rep'"
        x-bind:class="{ 'bg-yellow-500 font-bold border-white': tab === 'sales-rep' }"
        class="bg-transparent text-sm py-2 focus:outline-none capitalize px-4"
      >
        sales rep
      </button>
			<button
        x-on:click="tab = 'customers'"
        x-bind:class="{ 'bg-yellow-500 font-bold': tab === 'customers' }"
        class="bg-transparent text-sm px-4 py-2 focus:outline-none capitalize"
      >
        customers
      </button>
      <button
        x-on:click="tab = 'order'"
        x-bind:class="{ 'bg-yellow-500 font-bold border-white': tab === 'order' }"
        class="bg-transparent text-sm px-4 py-2 focus:outline-none capitalize"
      >
        order
      </button>
      <button
        x-on:click="tab = 'item'"
        x-bind:class="{ 'bg-yellow-500 font-bold': tab === 'item' }"
        class="bg-transparent text-sm px-4 py-2 focus:outline-none capitalize"
      >
        item
      </button>
			<button
        x-on:click="tab = 'invoice'"
        x-bind:class="{ 'bg-yellow-500 font-bold': tab === 'invoice' }"
        class="bg-transparent text-sm px-4 py-2 focus:outline-none capitalize"
      >
        invoice
      </button>
			<button
        x-on:click="tab = 'payment'"
        x-bind:class="{ 'bg-yellow-500 font-bold': tab === 'payment' }"
        class="bg-transparent text-sm px-4 py-2 focus:outline-none capitalize"
      >
        payment
      </button>
			<button
        x-on:click="tab = 'vendors'"
        x-bind:class="{ 'bg-yellow-500 font-bold': tab === 'vendors' }"
        class="bg-transparent text-sm px-4 py-2 focus:outline-none capitalize"
      >
        vendors
      </button>
    </nav>
    <ul class="bg-gray-100 text-sm px-8 py-12" style="border: 1px solid #ccc">
      <li x-show="tab === 'territory'">

        <div class="bg-white border-2 flex flex-col max-w-lg mx-auto px-4 py-8 space-y-6" style="border: 1px solid #ccc">
        <h1 class="text-2xl font-extrabold">Add New Territory</h1>
    <form action="#" method="POST" class="flex flex-col space-y-5">
          <label class="block">
            <span class="text-gray-900">Territory Number</span>
            <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm">
          </label>
          <label class="block">
            <span class="text-gray-900">Territory Name</span>
            <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm">
          </label>
          <button type="submit" class="block ml-auto mt-5 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Save
              </button>
    </form>

      </li>
      <li x-show="tab === 'sales-rep'">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe nobis eum ipsam dolores officia atque pariatur? Cupiditate, ducimus culpa voluptates, sit accusamus iure omnis molestiae commodi sapiente reprehenderit officia dolorem.
      </li>
      <li x-show="tab === 'customers'">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi id molestiae maiores reprehenderit nobis, sapiente architecto quam hic ab quo accusamus provident quas et quae qui sunt, pariatur iure atque.
      </li>
			<li x-show="tab === 'order'">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat perspiciatis molestiae dolore sint iusto debitis pariatur..
      </li>
			<li x-show="tab === 'item'">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus explicabo iste numquam.
      </li>
			<li x-show="tab === 'invoice'">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero iusto expedita sunt dicta..
      </li>
			<li x-show="tab === 'payment'">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti corporis nisi sit magni hic atque..
      </li>
			<li x-show="tab === 'vendors'">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti corporis nisi sit magni hic atque..
      </li>
    </ul>
  </div>
</div>
@endsection