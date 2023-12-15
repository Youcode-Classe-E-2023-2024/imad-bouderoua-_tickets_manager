
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind CSS Example</title>
    
    <!-- Add the Tailwind CSS CDN link -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="h-screen w-screen flex bg-gray-200 p-1">
    <!-- Sidebar -->
    <div class="firstdiv h-full w-16 flex flex-col items-center justify">
        <img width="40" height="40" src="https://img.icons8.com/plumpy/40/000000/two-tickets.png" alt="two-tickets" />
    </div>

    <!-- Ticket Section -->
    <div class="h-full flex flex-col w-3/12 bg-gray-300 border-2 border-gray-300">
        <!-- Header -->
        <div class="w-full h-20 border-b-2 flex items-center justify-between p-6 border-gray-400">
            <h1 class="text-black text-2xl italic font-mono">Tickets</h1>
            <button id="newTicketBtn" class="custom-btn btn-1">New Ticket</button>
        </div>

        <!-- Search -->
        <div class="group">
            <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
                <g>
                    <path
                        d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z">
                    </path>
                </g>
            </svg>
            <input placeholder="Search" type="search" class="input">
        </div>

        <!-- Categories -->
        <div class="h-full w-11/12 border-2 border-gray-500 mx-auto">
            <div onclick="alltickets(this)" class="w-full border-2 h-16 py-1 flex justify-center items-center hover:bg-gray-400">
                <h1 class="text-black text-xl italic font-mono">All tickets</h1>
            </div>
            <div onclick="yourtickets(this)" class="w-full border-2 h-16 py-1 flex justify-center items-center hover:bg-gray-400">
                <h1 class="text-black text-xl italic font-mono">Your tickets</h1>
            </div>
            <div onclick="asstickets(this)" class="w-full border-2 h-16 py-1 flex justify-center items-center hover:bg-gray-400">
                <h1 class="text-black text-xl italic font-mono">Tickets assigned</h1>
            </div>
        </div>
    </div>

    <!-- Content Section -->
    <div id="content" class="h-full flex flex-col w-8/12 bg-gray-200 border-2 border-gray-300 p-3 gap-1">
        <!-- Content Header -->
        <div class="w-full h-20 border-b-2 flex items-center justify-between p-6 border-gray-400">
            <h1 class="text-black text-3xl italic font-mono">All Tickets</h1>
        </div>

        <!-- Dummy Tickets -->
        <div class="border-2 border-gray-700 w-full h-full p-4 ticketsarticle max-w-screen overflow-y-auto">
    
        </div>
        <div class="hidden border-2 border-gray-700 w-full h-full p-4 articledyalo max-w-screen overflow-y-auto">
    
        </div>
        <div class="hidden border-2 border-gray-700 w-full h-full p-4 article3lih max-w-screen overflow-y-auto">
    
        </div>

    </div>

    <!-- New Ticket Form -->
    <div id="newTicketForm" class="hidden  h-full flex flex-col w-8/12 bg-gray-200 border-2 border-gray-300 p-3 gap-1">
        <div class="w-full h-20 border-b-2 flex items-center justify-between p-6 border-gray-400">
            <h1 class="text-black text-3xl italic font-mono">New Ticket</h1>
        </div>

        <!-- New Ticket Form Inputs -->
        <div class="flex flex-col gap-3 p-4">
            <label for="ticketTitle">Ticket Title:</label>
            <input type="text" id="ticketTitle" name="ticketTitle" class="input">

            <label for="ticketTag">Ticket Tag:</label>
            <input type="text" id="ticketTag" name="ticketTag" class="input">

            <label for="ticketPriority">Ticket Priority:</label>
            <select id="ticketPriority" name="ticketPriority" class="input">
                <option value="low">Low</option>
                <option value="medium">Medium</option>
                <option value="high">High</option>
            </select>

            <label for="ticketStatus">Ticket Status:</label>
            <select id="ticketStatus" name="ticketStatus" class="input">
                <option value="open">Open</option>
                <option value="in-progress">In Progress</option>
                <option value="closed">Closed</option>
            </select>

            <button id="submitTicketBtn" class="custom-btn btn-1">Submit</button>
        </div>
        <div class="w-3/6 ml-20">
            <div class="searchuser">
            
            <svg class="icon" aria-hidden="true" viewBox="0 0 24 24"><g><path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path></g></svg>
            <input placeholder="Search" type="search" class="input inputse">
           
          </div>
          <div class=" w-full  bg-white container"> 
           
          </div>
        </div>
        
    </div>

    
</body>

</html>


<style>
    .firstdiv{
        background-color: rgb(66, 57, 57);
    }
    .coler{
        background-color: #2f4c26a2;
    }
    .custom-btn {
 width: 130px;
 height: 40px;
 color: #fff;
 border-radius: 5px;
 padding: 10px 25px;
 font-family: 'Lato', sans-serif;
 font-weight: 500;
 background: transparent;
 cursor: pointer;
 transition: all 0.3s ease;
 position: relative;
 display: inline-block;
 box-shadow: inset 2px 2px 2px 0px rgba(255,255,255,.5),
   7px 7px 20px 0px rgba(0,0,0,.1),
   4px 4px 5px 0px rgba(0,0,0,.1);
 outline: none;
}

.btn-1 {
 background: rgb(6,14,131);
 background: linear-gradient(0deg, rgba(6,14,131,1) 0%, rgba(12,25,180,1) 100%);
 border: none;
}

.btn-1:hover {
 background: rgb(0,3,255);
 background: linear-gradient(0deg, rgb(0, 17, 255) 0%, rgba(2,126,251,1) 100%);
}
.group {
 display: flex;
 line-height: 28px;
 margin:30px auto;
    border-bottom: 2px solid grey;
 align-items: center;
 position: relative;
 max-width: 80%;
}

.input {
 width: 100%;
 height: 40px;
 line-height: 28px;
 padding: 0 1rem;
 padding-left: 2.5rem;
 border: 2px solid transparent;
 border-radius: 8px;
 outline: none;
 background-color: #f3f3f4;
 color: #0d0c22;
 transition: .3s ease;
}

.input::placeholder {
 color: #9e9ea7;
}

.input:focus, input:hover {
 outline: none;
 border-color: rgba(234,76,137,0.4);
 background-color: #fff;
 box-shadow: 0 0 0 4px rgb(234 76 137 / 10%);
}

.icon {
 position: absolute;
 left: 1rem;
 fill: #9e9ea7;
 width: 1rem;
 height: 1rem;
}
.searchuser{
    
}





</style>
<script>
    function setid(element,perm){
        if(perm=== 1){
            localStorage.setItem('perm',1);
        }else{
            localStorage.setItem('perm',0);
        }
        console.log(element.getAttribute('key'));
        localStorage.setItem('ticketid', element.getAttribute('key'));
        window.location.href = 'section.html';

    }
    function deleteelement(element){
        console.log(element.getAttribute('key'));
        localStorage.setItem('ticketid', element.getAttribute('key'));

    }
    var klchi = document.querySelector('.ticketsarticle');
    var elih = document.querySelector('.article3lih');
    var dyalo = document.querySelector('.articledyalo');
    var x = 0;
    function asstickets(element){
        console.log(klchi,dyalo,elih)
        elih.classList.remove('hidden');
        dyalo.classList.add('hidden');
        klchi.classList.add('hidden');
    }
    function yourtickets(element){
        console.log(klchi,dyalo,elih)
        dyalo.classList.remove('hidden');
        elih.classList.add('hidden');
        klchi.classList.add('hidden');
    }
    function alltickets(element){
        console.log(klchi,dyalo,elih)
        klchi.classList.remove('hidden');
        dyalo.classList.add('hidden');
        elih.classList.add('hidden');
    }
    setInterval(() => {
        var ytv = new XMLHttpRequest();
    ytv.open('get','fetchtickets.php',true);
    console.log('first ajax')
    ytv.onreadystatechange = function () {
                if (ytv.readyState === 4 && ytv.status === 200) {
                    console.log(ytv.responseText);
                    document.querySelector('.ticketsarticle').innerHTML = ytv.responseText;
                }
            };

            ytv.send();

            var ytv2 = new XMLHttpRequest();
    ytv2.open('get','fetchticketsdyalo.php?id='+ encodeURIComponent(localStorage.getItem('userid')),true);//'fetchusers.php?searchval=' + encodeURIComponent(searchuser.value)
    console.log('first ajax')
    ytv2.onreadystatechange = function () {
                if (ytv2.readyState === 4 && ytv2.status === 200) {
                    console.log(ytv2.responseText);
                    dyalo.innerHTML = ytv2.responseText;
                }
            };

            ytv2.send();
            var ytv3 = new XMLHttpRequest();
    ytv3.open('get','fetchticketselih.php?id='+ encodeURIComponent(localStorage.getItem('userid')),true);
    console.log('first ajax')
    ytv3.onreadystatechange = function () {
                if (ytv3.readyState === 4 && ytv3.status === 200) {
                    console.log(ytv3.responseText);
                    elih.innerHTML = ytv3.responseText;
                }
            };

            ytv3.send();
    }, 500);
   
    var array = new Set();

    function asiner(element) {
        console.log(element.getAttribute('key'));
        element.classList.add('coler');

        const keyValue = element.getAttribute('key');

        if (!array.has(keyValue)) {
            array.add(keyValue);
            console.log(Array.from(array)); 
        } else {
            console.log(`Value ${keyValue} is already in the array.`);
        }
    }



    var searchuser = document.querySelector('.inputse')
    searchuser.addEventListener("input",()=>{
        console.log(searchuser.value);
        var searchInput = document.querySelector('.input');
        if(searchuser.value != ""){
            var xhr = new XMLHttpRequest();
        xhr.open('GET', 'fetchusers.php?searchval=' + encodeURIComponent(searchuser.value), true);

            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    console.log(xhr.responseText);
                    document.querySelector('.container').innerHTML = xhr.responseText;
                }
            };

            xhr.send();
        }else{
            document.querySelector('.container').innerHTML = ""
        }
        
        });

    document.getElementById('newTicketBtn').addEventListener('click', function () {
        document.getElementById('newTicketForm').classList.toggle('hidden');
        document.getElementById('content').classList.toggle('hidden');
    });

    document.getElementById('submitTicketBtn').addEventListener('click', function () {
        console.log(array)
        // Collect input values
        var title = document.getElementById('ticketTitle').value;
        var tag = document.getElementById('ticketTag').value;
        var priority = document.getElementById('ticketPriority').value;
        var status = document.getElementById('ticketStatus').value;

        var xhrsend = new XMLHttpRequest();
        xhrsend.open('POST', 'save.php', true);
        xhrsend.onreadystatechange = () => {
            if (xhrsend.readyState === 4 && xhrsend.status === 200) {
                console.log(xhrsend.responseText);
            }
        };
        var data = {
            'molchi':localStorage.getItem('userid'),
            'title': title,
            'Tag': tag,
            'Priority': priority,
            'Status': status,
            'assigned': JSON.stringify(Array.from(array)),
        };
        xhrsend.send(JSON.stringify(data));
        window.location.reload();
        
        console.log(data)
    });
</script>