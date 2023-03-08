<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet
 version="1.0"
 xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
 xmlns="http://www.w3.org/1999/xhtml">
<xsl:output method="xml" indent="yes" encoding="UTF-8"/>
<xsl:template match="/">
<html>
<head>
    <title>books</title>
    <link rel="stylesheet" type="text/css" href="books.css"/>
      </head>
      <body>
           <center>
          <table border="2">
            <tr>
              <th>title</th>
              <th>author</th>
              <th>year</th>
              <th>publisher</th>
              <th>translator</th>
              <th>original</th>
              </tr>
            <xsl:for-each select="books/book">
            <xsl:sort select="year" data-type="number"/>
            <xsl:if test="year>1990 and author='Lovecraft, H. P.'">
              <tr>
                <td>
                  <xsl:value-of select="title"/>
                </td>
                <td>
                  <xsl:value-of select="author"/>
                </td>
                <td>
                  <xsl:value-of select="year"/>
                </td>
                <td>
                  <xsl:value-of select="publisher"/>
                </td>
                <td>
                  <xsl:value-of select="translator"/>
                </td>
                <td>
                  <xsl:value-of select="original"/>
                </td>
              </tr>
              </xsl:if>
            </xsl:for-each>
          </table>
        </center>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>