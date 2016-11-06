<?xml version="1.0" encoding="UTF-8" ?>
<xsl:stylesheet version="1.0" 
                xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:output 
              method="html" 
              doctype-public="-//W3C//DTD HTML 4.01//EN" 
              doctype-system="http://www.w3.org/TR/html4/strict.dtd" 
              indent="yes" />

  <!-- 
	Шаблон корневого элемента
	-->
  <xsl:template match="/">
    <html>

    <head>
      <title>Наши книги</title>
      <style type="text/css">
        * {
          margin: 0px;
          padding: 0px
        }
        
        h1 {
          padding: 10px;
          text-align: center;
          background-color: #ccf
        }
        
        table {
          margin: 10px;
          border-collapse: collapse
        }
        
        td {
          border: 1px solid gray;
          padding: 5px
        }
        
        thead td {
          text-align: center;
          background-color: #ccf;
          font-weight: bold
        }
        
        #colTitle {
          width: 300px
        }
        
        #colAutor {
          width: 300px
        }
        
        #colPubYear {
          width: 100px
        }
        
        #colPrice {
          width: 100px
        }
        

      </style>
    </head>

    <body>
      <h1>Наши книги</h1>
      <table>
        <thead>
          <td id="colTitle">Адреса</td>
          <td id="colAutor">Содежимое заказа</td>
          <td id="colPubYear">Год издания</td>
          <td id="colPrice">Цена</td>
        </thead>
        <tbody>
          <xsl:apply-templates select="PurchaseOrder/Address" />
          <xsl:apply-templates select="PurchaseOrder/Items" />
        </tbody>
      </table>
    </body>

    </html>
  </xsl:template>
  <!-- 
	Шаблон отрисовки книги стоимостью менее 200 руб.
	-->
  <xsl:template match="/PurchaseOrder/Items">
    <tr>
      <xsl:apply-templates select="./*" />
    </tr>
  </xsl:template>
  <!-- 
	Шаблон отрисовки книги стоимостью более 200 руб.
	-->
  <xsl:template match="PurchaseOrder/Address">
    <tr class="">
      <xsl:apply-templates select="./*" />
    </tr>
  </xsl:template>
  <!-- 
	Шаблон отрисовки дочерних элементов книги
	-->
  <xsl:template match="Address/*">
    <td>
      <xsl:value-of select="." />
    </td>
  </xsl:template>
  <xsl:template match="Item/*">
    <td>
      <xsl:value-of select="." />
    </td>
  </xsl:template>
</xsl:stylesheet>