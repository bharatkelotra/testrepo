<!DOCTYPE html>
<html>
    
    <head>
        
        <script type="text/javascript" src="d3.v3.min.js"></script>
       
    </head>
    <body>
        
        <div id="rect-demo"></div>
        <svg width="400" height="400">
        <circle cx="30" cy="30" r="10"></circle>
        <circle cx="60" cy="30" r="10"></circle>
        <circle cx="90" cy="30" r="10"></circle>
        </svg>    
        
    </body>
     <script type="text/javascript">
    
        
    /* d3.selectAll("circle")
        .attr("cy", function (){return Math.random() * 50;}); */
        
        d3.selectAll("circle").data([4,6,7]);
        
        
     
    
    
    
   /* var lines = [{ "x": 1,   "y": 5},  { "x": 20,  "y": 20},
                 { "x": 40,  "y": 10}, { "x": 60,  "y": 40},
                 { "x": 80,  "y": 5},  { "x": 100, "y": 60}];
             
             
      var linearfunction = d3.svg.line()
                            .x(function(d){return d.x;})
                            .y(function(d){return d.y;})
                            .interpolate("basis");
                            
       var svgContainer = d3.select("body").append("svg")
                            .attr("width",400)
                            .attr("height",400);
                            
                            
       var linegraph    = svgContainer.append("path")
                            .attr("d",linearfunction(lines))
                            .attr("stroke-width",2)
                            .attr("stroke","red")
                            .style("fill","none");
       /*    
       var jsonCircle = [
         {"x_axis":30,"y_axis":30,"radius":20,"color":"green"},
                          {"x_axis":70,"y_axis":70,"radius":30,"color":"red"},
                          {"x_axis":120,"y_axis":120,"radius":40,"color":"blue"}];
                      
                      
         var svgContainer = d3.select("body").append("svg").
                            attr("width",300).
                            attr("height",300);
         
         var circles = svgContainer.selectAll("circle").
                        data(jsonCircle).
                        enter().
                        append("circle");
                    
          var circleAttribute = circles.
                        attr("cx", function (d){ return d.x_axis;}).
                        attr("cy", function (d){return d.y_axis;}).
                        attr("r", function (d){return d.radius;}).
                        style("fill", function(d){return d.color;});
                    
             */       
    /*                 
                    var jsonCircles = [
 { "x_axis": 30, "y_axis": 30, "radius": 20, "color" : "green" },
   { "x_axis": 70, "y_axis": 70, "radius": 20, "color" : "purple"},
   { "x_axis": 110, "y_axis": 100, "radius": 20, "color" : "red"}];
 
 var svgContainer = d3.select("body").append("svg")
                                     .attr("width", 200)
                                     .attr("height", 200);
 
var circles = svgContainer.selectAll("circle")
                          .data(jsonCircles)
                          .enter()
                          .append("circle");

var circleAttributes = circles
                       .attr("cx", function (d) { return d.x_axis; })
                       .attr("cy", function (d) { return d.y_axis; })
                       .attr("r", function (d) { return d.radius; })
                       .style("fill", function(d) { return d.color; });
                            
        
        */
        
        /*   var thedata = [ 40, 30, 20 ];
           
           var svgselect = d3.select("body").
               append("svg").
               attr("width", 400).
               attr("height", 400);
           
           var circles = svgselect.selectAll("circle").
               data(thedata).
               enter().
               append("circle");
           
           circles.attr("cx",100).
               attr("cy",100).
               attr("r", function(d){return d;}).
               style("fill", function(d) {
                        var returnColor;
                         if (d === 40) { returnColor = "green";
                         } else if (d === 30) { returnColor = "yellow";
                        } else if (d === 20) { returnColor = "red"; }
                         return returnColor;
                       });
          */     
               
          /*     
               var theData = [ 1, 2, 3 ]

var p = d3.select("body").selectAll("p")
  .data(theData)
  .enter()
  .append("p")
  .text("hello ");
        */
    </script>
</html>