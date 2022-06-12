from flask import Flask, render_template, request

#? klau package nya di hidupin eror
import numpy as np
#from google.colab import files
from keras.preprocessing import image
import matplotlib.pyplot as plt
import matplotlib.image as mpimg
import matplotlib.pyplot as plt
import matplotlib.image as mpimg
import pickle
# %matplotlib inline

model = pickle.load(open('features.p','rb'))


app = Flask(__name__)
app.static_folder = 'static'

@app.route('/', methods=['GET'])
def index():
    return render_template('index.html')

@app.route('/', methods=['POST'])
def predict():
    imageFile= request.files['imageFile']
    image_path = "./images/"+imageFile.filename
    imageFile.save(image_path)



    return render_template('index.html')

if __name__ == '__main__':
    app.run(port=3000,debug=True)