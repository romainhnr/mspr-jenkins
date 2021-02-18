from xml.dom import minidom
import sys
mydoc = minidom.parse('report_pipeline/index.xml')
item = mydoc.getElementsByTagName('lines')
result = float(item[0].attributes['percent'].value)
if result <= 50:
    sys.exit('Error Quality barrier : {}% covered'.format(result))
