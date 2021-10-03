<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
    <style>
       *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
    
}
section{
    width: 100vw;
    height: 100vh;
    position: relative;
    display:grid;
    place-items:center;
    padding:20px 0;
}
.base{
    width: 800px;
    border: 2px solid black;
    height: auto;
     padding: 5px;
    
}

.content{
   
    width: 100%;
    margin: 20px 0;
}

.title{
    border-bottom: 2px solid black;
    width: 100%;
   margin-top: 20px;
}

.title h2{
    font-size: 30px;
    color: black;
}
.btns{
    margin: 10px 0;
}
.add{
    display: block;
    margin-bottom: 10px;
    padding: 0 10px;
     cursor: pointer;
}
.pesq{
    padding: 0 10px;
     cursor: pointer;
}

.table{
    width: 100%;
    height: auto;
}
table{
    width: 100%;
   border: 1px solid black;
    background-color: rgb(184, 184, 184);
}

.linha1 td{
    font-size: 20px;
    font-weight: 700;
    text-transform: capitalize;
    background-color: rgb(184, 184, 184);
     border: 1px solid black;
    width: 100px;
}
td{
    padding: 10px 0;
   background-color: white;
    padding-left: 5px;
    
}
.edit{
     padding: 0 10px;
      cursor: pointer;
}
.del{
     padding: 0 10px;
     cursor: pointer;
}

/* gravar */

.gravar{
    display: flex;
    flex-direction: column;
    width: 250px;
    
}


.gravar input{
  
    height: 25px;
}

.gravar label{
    margin-top: 15px;
   
}

.btngrava{
    width: 80px;
    margin-top: 20px;
    cursor: pointer;
    
    
}

.add{
    padding:0 10px;
}

@media(max-width: 992px){

    section{
    width: 100vw;
    height: 100vh;
    position: relative;
    
}
.base{
    width: 90%;
    border: 2px solid black;
    height: auto;
     padding: 5px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
}


.content{
   
    width: 100%;
    margin: 20px 0;
}
	.table thead{
		display: none;
	}

	.table, .table tbody, .table tr, .table td{
		display: block;
		width: 100%;
	}
	.table tr{
		margin-bottom:15px;
       
	}
	.table td{
		text-align: right;
		padding-left: 50%;
		text-align: right;
		position: relative;
        padding-right:15px;
	}
	.table td::before{
		content: attr(data-label);
		position: absolute;
		left:0;
		width: 50%;
		padding-left:15px;
		 font-size: 20px;
        font-weight: 700;
        text-transform: capitalize;
		text-align: left;

	}
    .edit{
        display: grid;
        place-content: center;
    }
     .done{
        display: grid;
        place-content: center;
    }

    .title{
        width: 100%;
    }
    h2{
        display: grid;
        place-content: center;
    }
}

    </style>
</head>

<body>
    <section>

        <div class="base">
            <div class="title">
                <h2>@yield('title') Usuário</h2>
            </div>
            
            <div class="content">
                <div class="list">
                 

                    @yield('contentAdd')
                </div>
              
            </div>
        </div>
    </section>
</body>

</html>