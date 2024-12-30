<!DOCTYPE html>
<html lang="en">
<head>   
<style>
* {
    box-sizing: border-box;
}
body {
    margin: 0;
    padding: 0;
    font-family: Arial, Helvetica, sans-serif;
}
header {
    width: 100%;
    background-color: rgba(23,23,23,0.15);
    padding: 20px;
    position: absolute;
    
top: 0;
}
header a {
    text-decoration: none;
    margin-right: 100px;
    font-size: 14px;
    letter-spacing: 1px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: rgba(255,255,255,0.719);
}
header .container {
    display: flex;
    justify-content: space-between;
    width: 1260px;
    margin: auto;
}
.banner-container {
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(to top, #a3bded 0%, #264268 100%);
    display: flex;
    align-items: center;
}
.banner-container .container {
    display: flex;
    justify-content: space-around;
    width: 100%;
    align-items: center;
}
.left-section {
    width: 600px;
 
   align-self: start;
}
.left-section h1 {
    margin: 0;
    color: white;
    font-size: 40px;
}
.left-section p {
    margin: 0;
    font-size: 14px;
    letter-spacing: 1px;
    color: rgba(255,255,255,0.884);
    margin-top: 18px;
    line-height: 28px;
}
footer {
    text-align: center;
    color: gray;
    padding: 15px;
}
footer span {
    color: #2098ca;
    font-weight: bold;
    text-transform: capitalize;
}
</style>
</head>
<body>
    <header>
        <div class="container">
            <a href="#">LoGo</a>
         
   <nav>            
     <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Contact</a>
                <a href="login1.php">Login</a>
            </nav>
        </div>
    </header>
    <main>
        <section class="banner-container">
            <div class="container">
                <div class="left-section">
                    <h1>Welcome</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, solute
                      ullam non dolor dolorum iste sequi numquam, quo consequuntur delectus    
                      sit doloremque doloribus, accusantium amet. Deseruntempquisquam!</p>
                </div> 
                    </form>
                </div>
            </div>
        </section>
    </main>
    <footer>
        Design and Developed by <span>Afna</span>
    </footer>
</body>
</html>
