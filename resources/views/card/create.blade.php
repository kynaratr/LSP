<style>
    @blue: #4cc9c8;
@pink: #fa001a;

.dots(@color) {
  background:
    radial-gradient(@color 20%, transparent 19%),
    radial-gradient(@color 20%, transparent 19%),
    transparent;
  background-size: 6px 6px;
  background-position: 0 0, 3px 3px;
}

.card {
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
  display: grid;
  font-family: 'Trebuchet MS', sans-serif;
  height: 200px;
  margin: 20px auto;
  width: 350px;
}

// Front of card

.front {
  grid-template-columns: repeat(12, 1fr);
  grid-template-rows: repeat(4, 1fr);
  
  .blue {
    background-color: @blue;
    grid-column: 8 / span 5;
    grid-row: 1 / span 4;
  }

  .yellow {
    background-color: #f1ef1c;
    grid-column: 1 / span 7;
    grid-row: 1 / span 4;
  }

  .pink {
    background-color: @pink;
    clip-path: polygon(0% 0%, 100% 0%, 0% 100%);
    grid-row: 1 / span 3;
    grid-column: 1 / span 11;
    position: relative;
    z-index: 2;
  }

  .dots {
    .dots(@pink);
    grid-column: 1 / span 12;
    grid-row: 3 / span 2;
    margin: 0 0 15px 20px;
    z-index: 1;
  }

  .personal-intro {
    background: black;
    color: white;
    display: flex;
    flex-direction: column;
    grid-column: 4 / span 6;
    grid-row: 2 / span 2;
    justify-content: center;
    text-align: center;
    z-index: 3;
    p {
      letter-spacing: 1px;
      text-transform: uppercase;
      &:first-of-type {
        font-size: 18px;
      }
      &:last-of-type {
        font-size: 8px;
        margin-top: 5px;
      }
    }
  }
}


// Back of card

.back {
  grid-template-columns: repeat(12, 1fr);
  grid-template-rows: repeat(12, 1fr);
  
  .yellow {
    background-color: #f1ef1c;
    grid-column: 1 / span 9;
    grid-row: 1 / span 3;
  }
  
  .top.dots {
    .dots(@blue);
    grid-column: 8 / span 6;
    grid-row: 2 / span 3;
  }
  
  .personal-info {
    grid-column: 1 / span 3;
    grid-row: 5 / span 6;
    p {
      font-size: 10px;
      &:first-of-type {
        font-size: 18px;
        font-weight: bold;
        letter-spacing: 1px;
        text-transform: uppercase;
      }
      &:nth-of-type(2){
        font-size: 12px;
        margin-bottom: 15px;
      }
    }
  }
  
  .personal-info img{
    position: absolute;
    left: 740px;
    width: 60px;
  }
  
  .bottom.dots {
    .dots(@blue);
    grid-column: 1 / span 8;
    grid-row: 11 / span 2;
    z-index: 2;
  }
  
  .pink {
    background-color: @pink;
    grid-column: 8 / span 5;
    grid-row: 10 / span 3;
  }
}



</style>

<!-- <div class="card front">
  <div class="blue"></div>
  <div class="yellow"></div>
  <div class="pink"></div>
  <div class="dots"></div>
  <div class="personal-intro">
    <p>Krista Stone</p>
    <p>Photographer Maker Doer</p>
  </div>
</div> -->
<div class="card back">
  <div class="yellow"></div>
  <div class="top dots"></div>
  <div class="personal-info">
  @foreach ($pelanggan as $key => $pelanggan)
    <p>{{ $pelanggan->nama_lengkap }}</p>
    <p>{{ $pelanggan->no_hp }}</p>
    <p>{{ $pelanggan->alamat }}</p>
    <img src="{{ asset($pelanggan->foto) }}" alt="{{ $pelanggan->nama_lengkap }}">
   @endforeach
    
  </div>
  <div class="bottom dots"></div>
  <div class="pink"></div>
</div>