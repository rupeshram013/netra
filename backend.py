

from flask import *
import time
import sys


netra = Flask(__name__)

myname = "rupesh ram"

@netra.route("/")
def index():
    return render_template("index.html" , )


# Routing the website for the users 

@netra.route("/login.php")
def login():
    return render_template("login.php")

@netra.route("/register.php")
def register():
    return render_template("register.php")


# Accepting the form data from the users

@netra.route("/database.php" ,methods=["POST"])
def form_submission():
    return render_template("database.php")


netra.run()