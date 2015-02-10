  var $=function(id)
  {
      return document.getElementById(id);
  }
  var $2=function(tag)
  {
       return document.getElementsByTagName(tag);
  }

    var elem=$("menu-list");
    var atag=$2("li");

     for(var i=0; i<atag.length; i++)
    {
        var firstcss=atag[i];
        if(firstcss.getAttribute("class") !="active_menu")
        {
            firstcss.onmousemove=function(e)
            {
                e.preventDefault();
                var  makecss=this;
                makecss.setAttribute("class","active_menu") ;
            }
            firstcss.onmouseout=function(e)
            {
                e.preventDefault();
                var remcss=this;
                remcss.setAttribute("class","");
            }
        }

    }

