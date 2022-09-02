var actros = document.querySelector('#actors');
var plot = document.querySelector('#plot');
var rating = document.querySelector('#rating');

const apikey = '3befd564';



function getinfo(){

    var movie = document.querySelector('#moviename').value;
    var year = document.querySelector('#movieyear').value;
    
    

    fetch('http://www.omdbapi.com/?apikey='+apikey+'&t='+movie+'&y='+year+'&plot=short').
    then(result=> result.json()).
    then(json=>{
        actros.textContent = json.Actors;
        plot.textContent = json.Plot;
        rating.textContent = json.imdbRating;
        console.log(json.Actors);
    }).catch(error=>console.log("ERROR"))

}