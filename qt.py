#!/usr/bin/env python3
from PyQt5 import QtWidgets
from PyQt5.QtWidgets import QApplication,QMainWindow
import sys
def application():
	app=QApplication(sys.argv)
	window=QMainWindow()
	window.setWindowTitle("Simple programm")
	window.setGeometry(300, 250, 350, 200)
	
	main_text=QtWidgets.QLabel(window)
	main_text.setText("This is simple text")
	main_text.move(100,100)
	main_text.adjustSize()

	window.show()
	sys.exit(app.exec_())

if __name__=="__main__":
	application()