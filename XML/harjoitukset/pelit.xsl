<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet
 version="1.0"
 xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
 xmlns="http://www.w3.org/1999/xhtml">
<xsl:output method="xml" indent="yes" encoding="UTF-8"/>
<xsl:template match="/">
<html>
<head>
    <title>pelit</title>
      </head>
      <body>
           <center>
          <table border="2">
            <tr>
              <th>nr</th>
              <th>pvm</th>
              <th>kotijoukkue</th>
              <th>vierasjoukkue</th>
              <th>kotitulos</th>
              <th>vierastulos</th>
              </tr>
            <xsl:for-each select="pelit/ottelu">
            <xsl:sort select="kotitulos" data-type="number"/>
              <tr>
                <td>
                  <xsl:value-of select="nr"/>
                </td>
                <td>
                  <xsl:value-of select="pvm"/>
                </td>
                <td>
                  <xsl:value-of select="kotijoukkue"/>
                </td>
                <td>
                  <xsl:value-of select="vierasjoukkue"/>
                </td>
                <td>
                  <xsl:value-of select="kotitulos"/>
                </td>
                <td>
                  <xsl:value-of select="vierastulos"/>
                </td>
              </tr>
                    </xsl:for-each>
          </table>
        </center>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>