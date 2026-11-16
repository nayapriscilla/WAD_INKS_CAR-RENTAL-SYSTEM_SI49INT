<!DOCTYPE html>
<html lang="en">
<head>
  <title>Driver Profile Directory</title>
  <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #ffff;
        padding: 20px;
      }

      .container {
        background-color: #ffff;
        width: 400px;
        margin: 0 auto;
        padding: 20px;
        border: 2px solid #ccc;
        margin-bottom: 20px;
      }

      h2 {
        text-align: center;
      }

      label {
        font-weight: bold;
        display: block; 
        margin-top: 10px;
      }

      .data-row {
        margin-bottom: 15px;
        border-bottom: 1px solid #ddd;
        padding-bottom: 10px;
      } 
  </style>
</head>
<body>
  
  <div style="text-align: center; margin-bottom: 20px;">
    <a href="{{ route('drivers.create') }}" style="background-color: #007bff; color: white; padding: 10px 15px; text-decoration: none; font-weight: bold;">+ Add New Driver</a>
  </div>

  @foreach ($drivers as $driver)
  <div class="container">
    <h2>Driver Profile</h2>

    <div class="data-row">
      <span style="font-weight: bold;">Name:</span>
      <span>{{ $driver->name }}</span>
    </div>

    <div class="data-row">
      <span style="font-weight: bold;">Age:</span>
      <span>{{ $driver->age }}</span>
    </div>

    <div class="data-row">
      <span style="font-weight: bold;">License Number:</span>
      <span>{{ $driver->license_number }}</span>
    </div>

    <div class="data-row">
      <span style="font-weight: bold;">Email:</span>
      <span>{{ $driver->email }}</span>
    </div>
    
    <div class="data-row">
      <span style="font-weight: bold;">Contact Number:</span>
      <span>{{ $driver->contact_number }}</span>
    </div>

    <div class="data-row">
      <span style="font-weight: bold;">Activity Status:</span>
      <span>{{ $driver->activity_status }}</span>
    </div>

    <div class="data-row" style="border-bottom: none; text-align: center; margin-top: 20px;">
      <a href="{{ route('drivers.edit', $driver->id) }}" style="background-color: #ff9800; color: white; padding: 8px 15px; text-decoration: none; font-weight: bold; margin-right: 10px;">Edit</a>
      
      <!-- Delete Form -->
      <form action="{{ route('drivers.destroy', $driver->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this driver?');">
        @csrf
        @method('DELETE')
        <button type="submit" style="background-color: #f2756c; color: white; padding: 8px 15px; border: none; font-weight: bold; cursor:pointer;">Delete</button>
      </form>
    </div>

  </div>
  @endforeach
  
</body>
</html>