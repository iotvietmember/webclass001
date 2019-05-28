#!/usr/bin/python3
# -*- coding: utf-8 -*-

import mysql.connector

#-------------------------------------------------------------------------
cnx = mysql.connector.MySQLConnection()

select_sql = ("SELECT * FROM lopweb.tblInfo")
insert_sql = ("INSERT INTO lopweb.tblInfo(hoten, namsinh, quequan, thuongtru, nghenghiep, ghichu) VALUES (%s, %s, %s, %s, %s, %s)")
update_sql = ("UPDATE lopweb.tblInfo SET hoten=%s, namsinh=%s, quequan=%s, thuongtru=%s, nghenghiep=%s, ghichu=%s WHERE hoten=%s")
delete_sql = ("DELETE FROM lopweb.tblInfo WHERE id = %s")


#-------------------------------------------------------------------------
def main():
	global cnx

	print('-------------------Python & MySQL - Basic demo-------------------------')

	# Ket noi den CSDL
	if cnx.is_connected() is False: 
		cnx = mysql.connector.connect(user='root', password='123456', \
			host='127.0.0.1', database='lopweb', autocommit=True)

	cursor = cnx.cursor(buffered=True, dictionary=True)
	print('Ket noi CSDL thanh cong.')

	# select
	cursor.execute(select_sql)
	if cursor.rowcount > 0:
		rows = cursor.fetchall()
		for row in rows:
			print('| {} | {} | {} | {} | {} | {} |'.format(row['hoten'], row['namsinh'], row['quequan'], row['thuongtru'], row['nghenghiep'], row['ghichu']))

	# insert
	# cursor.execute(insert_sql, ('Đỗ Thành Nam', 1987, 'Hưng Yên', 'TPHCM', 'Bộ đội', 'k',))
	#......check ket qua

	# update
	# cursor.execute(update_sql, ('Nam Thành Đỗ', 1987, 'Hưng Yên', 'TPHCM', 'Bộ đội', 'k', 'Đỗ Thành Nam'))

	# delete
	# cursor.execute(delete_sql, (1,)) 
	
	# disconnect
	cnx.close()


#--------------------------------------------------------------------------
if __name__ == '__main__':
	main()
