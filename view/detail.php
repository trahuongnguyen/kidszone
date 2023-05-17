<?php
    include('../inc/header.php');
    $idCat = $_GET['id'];
    $resultDetail = selectDetailByid($_GET['id']);
    if($resultDetail->num_rows>0){
      while($rowDetail = $resultDetail->fetch_assoc()){
        $imageDetail[] = $rowDetail['image'];
        $nameDetail[] = $rowDetail['name'];
        $audioDetail[] = $rowDetail['audio'];
      }
    }
    $resultCat = selectCat();
    if($resultCat->num_rows>0){
      while($rowCat = $resultCat->fetch_assoc()){
        $idCate[] = $rowCat['id'];
      }
    }
?>
    <div class = "container-fluid mb-5">
      <?php
          echo "
          <div class='container mt-5 mb-5'>
            <div class='row'>";
          for($j=0; $j<count($nameDetail); $j++){
            if(($j+1) % 4 != 0){
              echo 
                "<div class='col-md-3 col-sm-12 text-center'>
                  <a class='card'>
                    <img src='../img/{$imageDetail[$j]}' alt='{$nameDetail[$j]}' class='card__img'>
                    <span class='card__footer'>
                      <span>{$nameDetail[$j]}</span>
                    </span>
                    <span class='card__action' onclick='playAudio({$j})'>
                      <audio id='{$j}' class='myaudio'>
                        <source src='../voice/$audioDetail[$j]' type='audio/mpeg'>
                        Your browser does not support the audio element.
                      </audio>
                      <svg viewBox='0 0 448 512' title='play'>
                        <path d='M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z'/>
                      </svg>
                    </span>
                  </a>
                </div>";
            } else {
              echo 
                "<div class='col-md-3 col-sm-12 text-center'>
                  <a class='card'>
                      <img src='../img/{$imageDetail[$j]}' alt='{$nameDetail[$j]}' class='card__img'>
                      <span class='card__footer'>
                        <span>{$nameDetail[$j]}</span>
                      </span>
                      <span class='card__action' onclick='playAudio({$j})'>
                        <audio id='{$j}' class='myaudio'>
                          <source src='../voice/$audioDetail[$j]' type='audio/mpeg'>
                          Your browser does not support the audio element.
                        </audio>
                        <svg viewBox='0 0 448 512' title='play'>
                          <path d='M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z'/>
                        </svg>
                      </span>
                    </a>
                </div>
              </div>
            </div>";
            echo "
            <div class='container mt-5 mb-5'>
              <div class='row'>";
            }
          }
          echo "</div>
          </div>";
      ?>
      <div class='container-fluid mb-5'>
        <?php
          $prePage = $_GET['id']-1;
          $nextPage = $_GET['id']+1;
          if($_GET['id']>2 && $_GET['id']<count($idCate)){
            echo "<a href='../view/detail.php?id={$prePage}' class='previous-css'>< Previous</a>
            <a href='../view/detail.php?id={$nextPage}' class='next-css'>Next > </a>";
          }
          if ($_GET['id']==2){
            echo "<a href='../view/numberic.php?id={$prePage}' class='previous-css'>< Previous</a>
            <a href='../view/detail.php?id={$nextPage}' class='next-css'>Next > </a>";
          }
          if($_GET['id'] == count($idCate)){
            echo "<a href='../view/detail.php?id={$prePage}' class='previous-css'>< Previous</a>";
          }
        ?>
      </div>
    </div>
    <div class = "mb-5" style = "margin-left:45%;"><a href="#" class="back_top">Back to Top &#8593;</a></div>
    <script src="../js/detail.js"></script>
<?php
    include('../inc/footer.php');
?>