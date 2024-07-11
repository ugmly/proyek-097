<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movie Theater</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      margin: 0;
      padding: 0;
    }

    .jumbotron {
      padding: 20px 0;
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      margin-bottom: 30px;
    }

    .seat-info {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    .seat-info h2 {
      color: #333;
      margin-bottom: 20px;
      text-transform: uppercase;
      font-size: 1.8rem;
      text-align: center;
    }

    .schedule-item {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      margin-bottom: 20px;
      text-align: center;
    }

    .schedule-item:hover {
      transform: translateY(-5px);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    .schedule-item h3 {
      color: #333;
      margin-bottom: 10px;
      font-size: 1.5rem;
    }

    .schedule-item img {
      width: 100%;
      border-radius: 8px;
      margin-bottom: 10px;
    }

    .schedule-item ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
      text-align: left;
    }

    .schedule-item ul li {
      margin-bottom: 5px;
      color: #666;
      font-size: 1.1rem;
    }

    .btn {
      display: inline-block;
      padding: 10px 20px;
      font-size: 1rem;
      color: #fff;
      background-color: #007bff;
      border-radius: 5px;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #0056b3;
    }

    @media (max-width: 768px) {
      .schedule-item {
        padding: 15px;
      }
    }

    @media (max-width: 576px) {
      .schedule-item {
        padding: 10px;
      }

      .seat-info h2 {
        font-size: 1.5rem;
      }

      .schedule-item h3 {
        font-size: 1.2rem;
      }

      .schedule-item ul li {
        font-size: 1rem;
      }
    }

    .seat-info {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .seat-row {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      margin-bottom: 10px;
    }

    .row-label {
      font-weight: bold;
      margin-right: 10px;
    }

    .seat {
      display: inline-block;
      width: 40px;
      height: 40px;
      background-color: #007bff;
      color: white;
      text-align: center;
      line-height: 40px;
      margin: 5px;
      border-radius: 5px;
    }
  </style>
</head>

<body>
  <div class="jumbotron">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="seat-info">
            <h2>Seat Information</h2>
            <div class="schedule row">
              <div class="schedule-item col-md-6">
                <img src="<?php echo base_url('assets/images/1.jpg'); ?>" alt="Film 1">
                <h3>Film 1</h3>
                <ul>
                  <li>SHANG-CHI</li>
                  <li>Jam Tayang: 10:00 AM (Pagi)</li>
                  <li>Jam Tayang: 12:30 PM (Siang)</li>
                  <li>Jam Tayang: 5:00 PM (Malam)</li>
                </ul>
                <a href="<?php echo site_url('tiket/buy_tiket?film=SHANG-CHI'); ?>" class="btn mt-2">Buy Ticket</a>
              </div>
              <div class="schedule-item col-md-6">
                <img src="<?php echo base_url('assets/images/2.jpg'); ?>" alt="Film 2">
                <h3>Film 2</h3>
                <ul>
                  <li>TERMINATOR</li>
                  <li>Jam Tayang: 10:00 AM (Pagi)</li>
                  <li>Jam Tayang: 12:30 PM (Siang)</li>
                  <li>Jam Tayang: 5:00 PM (Malam)</li>
                </ul>
                <a href="<?php echo site_url('tiket/buy_tiket?film=TERMINATOR'); ?>" class="btn mt-2">Buy Ticket</a>
              </div>
              <div class="schedule-item col-md-6">
                <img src="<?php echo base_url('assets/images/3.jpg'); ?>" alt="Film 3">
                <h3>Film 3</h3>
                <ul>
                  <li>LAST BREATH</li>
                  <li>Jam Tayang: 10:00 AM (Pagi)</li>
                  <li>Jam Tayang: 12:30 PM (Siang)</li>
                  <li>Jam Tayang: 5:00 PM (Malam)</li>
                </ul>
                <a href="<?php echo site_url('tiket/buy_tiket?film=LAST BREATH'); ?>" class="btn mt-2">Buy Ticket</a>
              </div>
              <div class="schedule-item col-md-6">
                <img src="<?php echo base_url('assets/images/4.jpg'); ?>" alt="Film 4">
                <h3>Film 4</h3>
                <ul>
                  <li>THE BIKERIDERS</li>
                  <li>Jam Tayang: 7:30 PM (Malam)</li>
                </ul>
                <a href="<?php echo site_url('tiket/buy_tiket?film=THE BIKERIDERS'); ?>" class="btn mt-2">Buy Ticket</a>
              </div>
            </div>
            <br>
            <div class="schedule-item col-md-6">
                
                <h2>ticket price</h2>
                <ul>
                <li>Regular : Rp. 75.000</li>
                <li>VIP&emsp;&ensp;&nbsp; : Rp. 100.000</li>
                <br>
                <li>Tf. BNI-1758570652</li>
                </ul>
              </div>
            
            <br>
            <div class="schedule-item col-md-6">  
            <h2>Seat Number</h2>
           
            </div>
          
            <div class="row">
              <div class="seat-row">
                <span class="row-label">A</span>
                <span class="seat">A01</span>
                <span class="seat">A02</span>
                <span class="seat">A03</span>
                <span class="seat">A04</span>
                <span class="seat">A05</span>
                <span class="seat">A06</span>
                <span class="seat">A07</span>
                <span class="seat">A08</span>
                <span class="seat">A09</span>
                <span class="seat">A10</span>
                <span class="seat">A11</span>
                <span class="seat">A12</span>
                <span class="seat">A13</span>
                <span class="seat">A14</span>
                <span class="seat">A15</span>
              </div>
              <div class="seat-row">
                <span class="row-label">B</span>
                <span class="seat">B01</span>
                <span class="seat">B02</span>
                <span class="seat">B03</span>
                <span class="seat">B04</span>
                <span class="seat">B05</span>
                <span class="seat">B06</span>
                <span class="seat">B07</span>
                <span class="seat">B08</span>
                <span class="seat">B09</span>
                <span class="seat">B10</span>
                <span class="seat">B11</span>
                <span class="seat">B12</span>
                <span class="seat">B13</span>
                <span class="seat">B14</span>
                <span class="seat">B15</span>
              </div>
              <div class="seat-row">
                <span class="row-label">C</span>
                <span class="seat">C01</span>
                <span class="seat">C02</span>
                <span class="seat">C03</span>
                <span class="seat">C04</span>
                <span class="seat">C05</span>
                <span class="seat">C06</span>
                <span class="seat">C07</span>
                <span class="seat">C08</span>
                <span class="seat">C09</span>
                <span class="seat">C10</span>
                <span class="seat">C11</span>
                <span class="seat">C12</span>
                <span class="seat">C13</span>
                <span class="seat">C14</span>
                <span class="seat">C15</span>
              </div>
              <div class="seat-row">
                <span class="row-label">D</span>
                <span class="seat">D01</span>
                <span class="seat">D02</span>
                <span class="seat">D03</span>
                <span class="seat">D04</span>
                <span class="seat">D05</span>
                <span class="seat">D06</span>
                <span class="seat">D07</span>
                <span class="seat">D08</span>
                <span class="seat">D09</span>
                <span class="seat">D10</span>
                <span class="seat">D11</span>
                <span class="seat">D12</span>
                <span class="seat">D13</span>
                <span class="seat">D14</span>
                <span class="seat">D15</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
