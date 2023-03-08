<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet
 version="1.0"
 xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
 xmlns="http://www.w3.org/1999/xhtml">
<xsl:output method="xml" indent="yes" encoding="UTF-8"/>
<xsl:template match="/">
<html>
<head>
        <title>kurssin osallistujat</title>
      </head>
      <body>
        <center>
          <table border="2">
            <tr>
              <th>tunnus</th>
              <th>nimi</th>
              <th>H/I</th>
            </tr>
            <xsl:for-each select="kurssi/osallistuja">
              <tr>
                <td>
                  <xsl:value-of select="tunnus"/>
                </td>
                <td>
                  <xsl:value-of select="nimi"/>
                </td>
                <td>
                  <xsl:value-of select="@tila"/>
                </td>
              </tr>
            </xsl:for-each>
          </table>
        </center>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>