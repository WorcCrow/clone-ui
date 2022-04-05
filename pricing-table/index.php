<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->

  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
  
  <title>Frontend Mentor | Interactive rating component</title>

  <link rel="stylesheet" href="style.css?ver=<?=microtime()?>">
</head>
<body>
  <div class="container middle">
      <div class="card-group">
      <div class="card left">
          <div class="card-head">
            <div class="price">
              $10
            </div>
            <div class="title">
              Starter Plan
            </div>
          </div>

          <div class="card-body">
            <div class="description">
              <ul>
                <li>100 Daily Energy</li>
                <li>100 Daily Bet</li>
                <li>50 Captcha Daily</li>
              </ul>
            </div>
          </div>

          <div class="card-footer">
            <div class="action middle">
                <div>Upgrade</div>
            </div>
          </div>
        </div>

        <div class="card selected">
          <div class="card-head">
            <div class="price">
              $20
            </div>
            <div class="title">
              Basic Plan
            </div>
          </div>

          <div class="card-body">
            <div class="description">
              <ul>
                <li>100 Daily Energy</li>
                <li>100 Daily Bet</li>
                <li>50 Captcha Daily</li>
              </ul>
            </div>
          </div>

          <div class="card-footer">
            <div class="action middle">
                <div>Upgrade</div>
            </div>
          </div>
        </div>

        <div class="card right">
          <div class="card-head">
            <div class="price">
              $50
            </div>
            <div class="title">
              Pro Plan
            </div>
          </div>

          <div class="card-body">
            <div class="description">
              <ul>
                <li>100 Daily Energy</li>
                <li>100 Daily Bet</li>
                <li>50 Captcha Daily</li>
              </ul>
            </div>
          </div>

          <div class="card-footer">
            <div class="action middle">
                <div>Upgrade</div>
            </div>
          </div>
        </div>
    </div>
  </div>

  <script>
  (()=>{
    console.log("Script Loaded")
    let cards = document.querySelectorAll('.card')
    cards.forEach(card=>{
      card.addEventListener('click',(e)=>{
        let temp = ""
        if(card.classList.contains('selected')) return

        if(card.classList.contains('left')){
          temp = "left"
        }else if(card.classList.contains('right')){
          temp = "right"
        }

        console.log(temp)

        cards.forEach(card=>{
          if(card.classList.contains('selected')){
            card.classList.remove('selected')
            card.classList.add(temp)
          }
        })

        card.classList.remove(temp)
        card.classList.add('selected')
        //card.classList.add('selected')
      })
    })

    
  })()
  </script>
  
</body>
</html>