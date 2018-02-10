# -*- coding: utf-8 -*-
"""
Created on Sat Feb 10 17:35:15 2018

@author: Akshama PC
"""

from __future__ import absolute_import
from __future__ import division
from __future__ import print_function

from six.moves.urllib.request import urlopen

import numpy as np
import tensorflow as tf

TRAINING = "dataset1.csv"

training_set = tf.contrib.learn.datasets.base.load_csv_with_header(
      filename=TRAINING,
      target_dtype=np.int,
      features_dtype=np.int)
test_set = tf.contrib.learn.datasets.base.load_csv_with_header(
      filename=TRAINING,
      target_dtype=np.int,
      features_dtype=np.int)

  feature_columns = [tf.feature_column.numeric_column("x", shape=[26])]

  # Build 3 layer DNN with 10, 20, 10 units respectively.
  classifier = tf.estimator.DNNClassifier(feature_columns=feature_columns,
                                          hidden_units=[10, 20, 10],
                                          n_classes=2,
                                          model_dir="/tmp/hackeam_model")
    train_input_fn = tf.estimator.inputs.numpy_input_fn(
      x={"x": np.array(training_set.data)},
      y=np.array(training_set.target),
      num_epochs=None,
      shuffle=True)

  # Train model.
  classifier.train(input_fn=train_input_fn, steps=2000)
test_input_fn = tf.estimator.inputs.numpy_input_fn(
x={"x": np.array(test_set.data)},
y=np.array(test_set.target),
num_epochs=1,
shuffle=False)
 ####################################################
print ("test input value=......")
print(test_input_fn) 
#####################################################

  # Evaluate accuracy.
  accuracy_score = classifier.evaluate(input_fn=test_input_fn)["accuracy"]

  print("\nTest Accuracy: {0:f}\n".format(accuracy_score))