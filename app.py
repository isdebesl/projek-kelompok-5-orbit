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
import Ngorbit1
from PIL import Image
# %matplotlib inline


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

    #classes = model.predict(images, batch_size=10)
    classes = Ngorbit1.predict(image_path)
    nama=classes[0]
    alamat=classes[1]
    jambuka=classes[2]
    rating=classes[3]
    ulasan=classes[4]
    gambar=classes[5]

    return render_template('index.html', nama=nama, alamat=alamat, jambuka=jambuka, rating=rating, ulasan=ulasan, gambar=gambar)

if __name__ == '__main__':
    app.run(port=3000,debug=True)
