<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Dashboard with Scrollable Collapsible Sidebar</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }

    .sidebar {
      height: calc(100vh - 4rem);
      /* Full height minus the header height */
    }
  </style>
</head>

<body class="bg-gray-100 font-sans antialiased">
  <div class="flex">
    <!-- Sidebar -->
    <?php require_once("includes/includes-sidebar.php") ?>

    <!-- Main content -->
    <div class="flex-1 ml-64 p-6">
      <!-- Header -->
      <?php require_once("includes/includes-header.php") ?>

      <!-- Dashboard content -->
      <div class="grid grid-cols-1 items-center md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
        <div class="bg-white p-4 rounded-lg shadow">
          <div class="flex items-center justify-between  mb-4">
            <h2 class="text-2xl bg-orange-400 text-white p-4 rounded-[3.5rem] bg-opacity-50  h-[3.5rem]  font-semibold"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
              </svg>
            </h2>
            <div class="text-2xl text-orange-500">$19,626,058.20</div>
          </div>
        </div>
        <div class="bg-white p-4 rounded-lg shadow">
          <div class="flex items-center justify-between mb-4">
            <h2 class="text-xl font-semibold text-green-500 bg-green-200 p-4 rounded-[3.5rem] bg-opacity-50 shadow-green-500 h-[3.5rem] "><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
              </svg>
            </h2>

            <div class="text-2xl text-green-500">
              <p class="text-sm">Total Orders</p>
              <p>3290</p>
            </div>
          </div>
        </div>
        <div class="bg-white p-4 rounded-lg shadow">
          <div class="flex items-center justify-between mb-4">
            <h2 class="text-xl font-semibold text-blue-500 bg-blue-200 p-4 rounded-[3.5rem] bg-opacity-50 shadow-green-500 h-[3.5rem] "><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path fill-rule="evenodd" d="M7.5 6v.75H5.513c-.96 0-1.764.724-1.865 1.679l-1.263 12A1.875 1.875 0 0 0 4.25 22.5h15.5a1.875 1.875 0 0 0 1.865-2.071l-1.263-12a1.875 1.875 0 0 0-1.865-1.679H16.5V6a4.5 4.5 0 1 0-9 0ZM12 3a3 3 0 0 0-3 3v.75h6V6a3 3 0 0 0-3-3Zm-3 8.25a3 3 0 1 0 6 0v-.75a.75.75 0 0 1 1.5 0v.75a4.5 4.5 0 1 1-9 0v-.75a.75.75 0 0 1 1.5 0v.75Z" clip-rule="evenodd" />
              </svg>
            </h2>
            <div class="text-2xl text-blue-500">
              <p class="text-sm">Total Products</p>
              <h2>322</h2>
            </div>
          </div>
        </div>
      </div>

      <!-- Sales statistics -->
      <div class="flex gap-2">
        <div class="bg-white p-4 rounded-lg shadow mb-6 w-[38rem] ">
          <h2 class="text-xl font-semibold mb-4">Sales statistics</h2>
          <canvas id="salesChart"></canvas>
        </div>
        <div class="bg-white p-4 rounded-lg shadow mb-6 w-[21.3rem] ">
          <h2 class="text-xl font-semibold mb-4">Sales statistics</h2>
          <canvas id="salesChart1"></canvas>
        </div>
      </div>

      <!-- Latest orders -->
      <div class="bg-white p-4 rounded-lg shadow">
        <h2 class="text-xl font-semibold mb-4">Latest orders</h2>
        <table class="w-full">
          <thead>
            <tr class="text-left">
              <th class="pb-2">Order ID</th>
              <th class="pb-2">Customer</th>
              <th class="pb-2">Email</th>
              <th class="pb-2">Amount</th>
              <th class="pb-2">Status</th>
              <th class="pb-2">Date</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="py-2">2323</td>
              <td class="py-2">Devon Lane</td>
              <td class="py-2">devon@example.com</td>
              <td class="py-2">$778.35</td>
              <td class="py-2 text-green-500">Delivered</td>
              <td class="py-2">07.05.2020</td>
            </tr>
            <tr>
              <td class="py-2">2458</td>
              <td class="py-2">Darrell Steward</td>
              <td class="py-2">darrell@example.com</td>
              <td class="py-2">$219.78</td>
              <td class="py-2 text-green-500">Delivered</td>
              <td class="py-2">03.07.2020</td>
            </tr>
            <tr>
              <td class="py-2">6289</td>
              <td class="py-2">Darlene Robertson</td>
              <td class="py-2">darlene@example.com</td>
              <td class="py-2">$928.41</td>
              <td class="py-2 text-red-500">Cancelled</td>
              <td class="py-2">23.03.2020</td>
            </tr>
            <tr>
              <td class="py-2">3869</td>
              <td class="py-2">Courtney Henry</td>
              <td class="py-2">courtney@example.com</td>
              <td class="py-2">$90.51</td>
              <td class="py-2 text-yellow-500">Pending</td>
              <td class="py-2">04.07.2020</td>
            </tr>
            <tr>
              <td class="py-2">1247</td>
              <td class="py-2">Eleanor Pena</td>
              <td class="py-2">eleanor@example.com</td>
              <td class="py-2">$275.43</td>
              <td class="py-2 text-green-500">Delivered</td>
              <td class="py-2">10.03.2020</td>
            </tr>
            <tr>
              <td class="py-2">3961</td>
              <td class="py-2">Ralph Edwards</td>
              <td class="py-2">ralph@example.com</td>
              <td class="py-2">$630.44</td>
              <td class="py-2 text-green-500">Delivered</td>
              <td class="py-2">23.03.2020</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    function toggleDropdown(id) {
      const element = document.getElementById(id);
      element.classList.toggle('hidden');
    }

    const ctx = document.getElementById('salesChart').getContext('2d');
    const salesChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        datasets: [{
          label: 'Sales',
          data: [12000, 19000, 3000, 5000, 2000, 30000, 45000, 20000, 15000, 25000, 35000, 40000],
          backgroundColor: 'rgba(54, 162, 235, 0.2)',
          borderColor: 'rgba(54, 162, 235, 1)',
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>

  <script>
    function toggleDropdown(id) {
      const element = document.getElementById(id);
      element.classList.toggle('hidden');
    }

    const ctx1 = document.getElementById('salesChart1').getContext('2d');
    const salesChart1 = new Chart(ctx1, {
      type: 'pie',
      data: {
        labels: [
          "Barisal",
          "Chattogram",
          "Dhaka",
          "Khulna",
          "Mymensingh",
          "Rajshahi",
          "Rangpur",
          "Sylhet"
        ],
        datasets: [{
          label: 'Sales',
          data: [12000, 19000, 3000, 5000, 2000, 30000, 45000, 20000],
          backgroundColor: 'rgba(54, 162, 235, 0.2)',
          borderColor: 'rgba(54, 162, 235, 1)',
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>
</body>

</html>