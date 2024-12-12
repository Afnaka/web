
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
/* heading start */
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
/* heading end */
/* container start */
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
/* container end */
/* left section start */
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
.left-section button {
    color:#2098ca;
    font-weight: bold;
    background-color: white;
    border: none;
    border-radius: 6px;
    margin-top: 15px;
    padding: 12px 50px;
    cursor: pointer;
}
/* left section end */
/* right section start */
.right-section {
    width: 400px;
    background-color: white;
    border-radius: 15px;
    padding: 40px 0;
    box-shadow: 0 5px 6px rgba(0,0,0,0.29);
}
.right-section h4 {
    font-size: 20px;
    width: 300px;
    margin: auto;
    margin-bottom: 30px;
    color: rgb(136,136,136);
    text-transform: capitalize;
}
.input-group {
    width: 300px;
    margin: 30px auto;
    display: flex;
    flex-direction: column;
    position: relative;
}
.input-group label {
    color: rgb(165,165,165);
    font-size: 14px;
    position: absolute;
    transition: 0.5s ease-in-out;
    top: 10px;
}
.input-group input {
    border: none;
    padding: 7px;
    margin-top: 5px;
    outline: none;
    color: #2098ca;
    border-bottom: 1px solid #c9c9c98a;
}
/* input label style */
.input-group input:focus ~ label,
.input-group input:valid ~ label {
    color:#2098ca;
    top: -10px;
    font-size: 12px;
}
.input-group input:focus, 
.input-group input:valid {
    border-color:#2098ca;
}
.submit-section {
    background-color:#2098ca;
    color: white;
    border: none;
    padding: 10px 0;
    margin-top: 15px;
    border-radius: 5px;
    width: 300px;
    cursor: pointer;
}
.button-section {
    text-align: center;
}
.submit-section:hover {
    box-shadow: 0 3px 6px silver;
}
/* right section end */
/* section two */
.section-two {
    display: flex;
    justify-content: space-evenly;
    height: 100vh;
    align-items: center;
    margin-top: -40px;
}
/* footer start */
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
/* footer end */

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
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, soluta ullam non dolor dolorum iste sequi
                        numquam, quo consequuntur at delectus sit doloremque doloribus, accusantium amet. Deserunt et tempore quisquam!</p>
                    
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

