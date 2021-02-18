import sys
f = open("report_pipeline/report_coding_standards.txt", "r")
data = f.read().split('A TOTAL OF')
data = int(data[1].split('ERRORS')[0])
if data > 0:
    sys.exit('Error Quality barrier : {} errors'.format(data))