import sys
from PyQt5.QtWidgets import QApplication, QMainWindow, QLineEdit, QPushButton, QVBoxLayout, QWidget
from PyQt5.QtWebEngineWidgets import QWebEngineView
from PyQt5.QtCore import QUrl

class AstroFind(QMainWindow):
    def __init__(self):
        super().__init__()
        self.setWindowTitle('AstroFind')
        self.setGeometry(100, 100, 800, 600)

        # Create a central widget and set it as the central widget
        central_widget = QWidget()
        self.setCentralWidget(central_widget)

        # Create a vertical layout for the central widget
        layout = QVBoxLayout(central_widget)

        # Create a search bar (QLineEdit) and a search button (QPushButton)
        self.search_bar = QLineEdit(self)
        self.search_bar.setPlaceholderText('Enter search query or URL')
        self.search_button = QPushButton('Search', self)

        # Add the search bar and search button to the layout
        layout.addWidget(self.search_bar)
        layout.addWidget(self.search_button)

        # Create a QWebEngineView and add it to the layout
        self.browser = QWebEngineView()
        layout.addWidget(self.browser)

        # Connect the search button click event to the search method
        self.search_button.clicked.connect(self.search)
        self.search_bar.returnPressed.connect(self.search)

        # Set the initial page to Google
        self.browser.setUrl(QUrl('https://www.google.com'))

    def search(self):
        query = self.search_bar.text()
        if query.startswith('http://') or query.startswith('https://'):
            url = query
        else:
            url = f'https://www.google.com/search?q={query}'
        self.browser.setUrl(QUrl(url))

if __name__ == '__main__':
    app = QApplication(sys.argv)
    window = AstroFind()
    window.show()
    sys.exit(app.exec_())
