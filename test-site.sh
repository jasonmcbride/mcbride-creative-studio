#!/bin/bash

echo "=========================================="
echo "McBride Creative Site Diagnostics"
echo "=========================================="
echo ""

echo "Testing homepage..."
curl -s http://localhost:8080 | grep -q "Marketing Design for Community Theatre" && echo "✅ Homepage loading correctly" || echo "❌ Homepage not showing hero content"

echo ""
echo "Testing page URLs..."
curl -s -o /dev/null -w "%{http_code}" http://localhost:8080/portfolio/ | grep -q "200" && echo "✅ /portfolio - OK" || echo "❌ /portfolio - 404"
curl -s -o /dev/null -w "%{http_code}" http://localhost:8080/services/ | grep -q "200" && echo "✅ /services - OK" || echo "❌ /services - 404"
curl -s -o /dev/null -w "%{http_code}" http://localhost:8080/about/ | grep -q "200" && echo "✅ /about - OK" || echo "❌ /about - 404"
curl -s -o /dev/null -w "%{http_code}" http://localhost:8080/contact/ | grep -q "200" && echo "✅ /contact - OK" || echo "❌ /contact - 404"

echo ""
echo "=========================================="
echo "If all show ✅ but browser still has issues:"
echo "  1. Clear browser cache completely"
echo "  2. Try incognito/private window"
echo "  3. Hard refresh: Ctrl+Shift+R"
echo "=========================================="
